<?php
/**
 * @package   Blue Flame Network (bfNetwork)
 * @copyright Copyright (C) 2011, 2012, 2013, 2014, 2015 Blue Flame IT Ltd. All rights reserved.
 * @license   GNU General Public License version 3 or later
 * @link      https://myJoomla.com/
 * @author    Phil Taylor / Blue Flame IT Ltd.
 *
 * bfNetwork is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * bfNetwork is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this package.  If not, see http://www.gnu.org/licenses/
 */
require 'bfEncrypt.php';

/**
 * If we have got here then we have already passed through decrypting
 * the encrypted header and so we are sure we are now secure and no one
 * else cannot run the code below.
 */
final class bfBackup
{
    /**
     * We pass the command to run as a simple integer in our encrypted
     * request this is mainly to speed up the decryption process, plus its a
     * single digit(or 2) rather than a huge string to remember :-)
     */
    private $_methods = array(
        1 => 'enableAkeebaFrontendBackup',
    );

    /**
     * Pointer to the Joomla Database Object
     * @var JDatabaseMysql
     */
    private $_db;

    /**
     * Incoming decrypted vars from the request
     * @var stdClass
     */
    private $_dataObj;

    /**
     * PHP 5 Constructor,
     * I inject the request to the object
     *
     * @param stdClass $dataObj
     */
    public function __construct($dataObj)
    {
        // init Joomla
        require 'bfInitJoomla.php';

        // Set the request vars
        $this->_dataObj = $dataObj;
    }

    /**
     * I'm the controller - I run methods based on the request integer
     */
    public function run()
    {
        if (property_exists($this->_dataObj, 'c')) {

            $c = ( int )$this->_dataObj->c;
            if (array_key_exists($c, $this->_methods)) {

                // call the right method
                $this->{$this->_methods [$c]} ();
            } else {

                // Die if an unknown function
                bfEncrypt::reply('error', 'No Such method #err1 - ' . $c);
            }
        } else {

            // Die if an unknown function
            bfEncrypt::reply('error', 'No Such method #err2');
        }
    }

    /**
     * If not enabled, then enable the Akeeba API Frontend using a secure secret word
     */
    private function enableAkeebaFrontendBackup()
    {
        // load mini-Joomla
        require 'bfInitJoomla.php';

        $this->_db = JFactory::getDBO();

        // Get some Joomla version
        $VERSION = new JVersion ();

        switch ($VERSION->RELEASE) {
            case '1.5':

                $params = JComponentHelper::getParams('com_akeeba');
                if (!count($params->toArray())) {
                    // send back the totals
                    bfEncrypt::reply('success', array(
                        'akeeba_installed' => FALSE
                    ));
                }

                $frontend_enable      = $params->get('frontend_enable');
                $frontend_secret_word = $params->get('frontend_secret_word');

                if ($frontend_enable != 1) {
                    $params->set('frontend_enable', 1);
                    $saveChanges = TRUE;
                }

                $params->set('frontend_secret_word', str_replace('&', '', JUtility::getHash(JUtility::getToken(TRUE))));
                $saveChanges = TRUE;

                $secretWord = $params->get('frontend_secret_word');

                if (TRUE == $saveChanges) {
                    $params = $params->toString();
                    $sql    = 'UPDATE #__components SET params = \'%s\' WHERE `OPTION` = "com_akeeba"';
                    $sql    = sprintf($sql, addslashes($params));
                    $this->_db->setQuery($sql);
                    $this->_db->query();
                }
                break;
            default:
            case '2.5':


                $this->_db->setQuery('SELECT extension_id, params FROM #__extensions WHERE NAME="akeeba" AND element = "com_akeeba"');
                $data = $this->_db->loadObject();

                if (!$data) {
                    // send back the totals
                    bfEncrypt::reply('success', array(
                        'akeeba_installed' => FALSE
                    ));
                }

                $params = json_decode($data->params);


                if ($params->frontend_enable != 1) {
                    $params->frontend_enable = 1;
                    $saveChanges             = TRUE;
                }

                if (!$params->frontend_secret_word || preg_match('/\&/', $params->frontend_secret_word)) {
                    $params->frontend_secret_word = md5(JApplication::getHash('myjoomla'));
                    $saveChanges                  = TRUE;
                }

                $secretWord = $params->frontend_secret_word;

                if (TRUE == $saveChanges) {
                    $params = json_encode($params);
                    $sql    = 'UPDATE #__extensions SET params = \'%s\' WHERE extension_id = %s';
                    $sql    = sprintf($sql, addslashes($params), $data->extension_id);
                    $this->_db->setQuery($sql);
                    $this->_db->query();
                }
                break;
        }


        // send back the totals
        bfEncrypt::reply('success', array(
            'akeeba_installed' => TRUE,
            'secret'           => $secretWord
        ));
    }
}

// init this class
$backupController = new bfBackup ($dataObj);

// Run the tool method
$backupController->run();
