<?php
/**
 * @package   Blue Flame Network (bfNetwork)
 * @copyright Copyright (C) 2011, 2012, 2013, 2014, 2015 Blue Flame IT Ltd. All rights reserved.
 * @license   GNU General Public License version 3 or later
 * @link      http://myJoomla.com/
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
final class bfTools
{

    /**
     * We pass the command to run as a simple integer in our encrypted
     * request this is mainly to speed up the decryption process, plus its a
     * single digit(or 2) rather than a huge string to remember :-)
     */
    private $_methods = array(
        1 => 'getCoreHashFailedFileList',
        2 => 'downloadfile',
        3 => 'restorefile',
        4 => 'getSuspectContentFileList',
        5 => 'deleteFile',
        6 => 'checkFTPLayer',
        7 => 'disableFTPLayer',
        8 => 'checkNewDBCredentials',
        9 => 'testDbCredentials',
        10 => 'getFolderPermissions',
        11 => 'setFolderPermissions',
        12 => 'getHiddenFolders',
        13 => 'deleteFolder',
        14 => 'getInstallationFolders',
        15 => 'getRecentlyModified',
        16 => 'getFilePermissions',
        17 => 'setFilePermissions',
        18 => 'getErrorLogs',
        19 => 'getEncrypted',
        20 => 'getUser',
        21 => 'setUser',
        22 => 'setDbPrefix',
        23 => 'setDbCredentials',
        24 => 'getBakTables',
        25 => 'deleteBakTables',
        26 => 'getHtaccessFiles',
        27 => 'setHtaccess',
        28 => 'getUpdatesCount',
        29 => 'getUpdatesDetail',
        30 => 'getDotfiles',
        31 => 'getArchivefiles',
        32 => 'getLargefiles',
        33 => 'fixDbSchema',
        34 => 'getDbSchemaVersion',
        35 => 'checkGoogleFile',
        36 => 'toggleOnline',
        37 => 'getOfflineStatus',
        38 => 'getRobotsFile',
        39 => 'saveRobotsFile',
        40 => 'getTmpfiles',
        41 => 'clearTmpFiles',
        42 => 'getFlufffiles',
        43 => 'clearFlufffiles',
        44 => 'getRenamedToHide',
        45 => 'getPhpinwrongplace',
        46 => 'doExtensionUpgrade',
        47 => 'toggleCache',
        48 => 'getCacheStatus',
        49 => 'checkAkeebaOutputDirectory'
    );

    private $fluffFiles = array(
        '/robots.txt.dist',
        '/web.config.txt',
        '/joomla.xml',
        '/build.xml',
        '/LICENSE.txt',
        '/README.txt',
        '/htaccess.txt',
        '/LICENSES.php',
        '/configuration.php-dist',
        '/CHANGELOG.php',
        '/COPYRIGHT.php',
        '/CREDITS.php',
        '/INSTALL.php',
        '/LICENSE.php',
        '/CONTRIBUTING.md',
        '/phpunit.xml.dist',
        '/README.md',
        '/.travis.yml',
        '/travisci-phpunit.xml',
        '/images/banners/osmbanner1.png',
        '/images/banners/osmbanner2.png',
        '/images/banners/shop-ad-books.jpg',
        '/images/banners/shop-ad.jpg',
        '/images/banners/white.png',
        '/images/headers/blue-flower.jpg',
        '/images/headers/maple.jpg',
        '/images/headers/raindrops.jpg',
        '/images/headers/walden-pond.jpg',
        '/images/headers/windows.jpg',
        '/images/joomla_black.gif',
        '/images/joomla_black.png',
        '/images/joomla_green.gif',
        '/images/joomla_logo_black.jpg',
        '/images/powered_by.png',
        '/images/sampledata/fruitshop/apple.jpg',
        '/images/sampledata/fruitshop/bananas_2.jpg',
        '/images/sampledata/fruitshop/fruits.gif',
        '/images/sampledata/fruitshop/tamarind.jpg',
        '/images/sampledata/parks/animals/180px_koala_ag1.jpg',
        '/images/sampledata/parks/animals/180px_wobbegong.jpg',
        '/images/sampledata/parks/animals/200px_phyllopteryx_taeniolatus1.jpg',
        '/images/sampledata/parks/animals/220px_spottedquoll_2005_seanmcclean.jpg',
        '/images/sampledata/parks/animals/789px_spottedquoll_2005_seanmcclean.jpg',
        '/images/sampledata/parks/animals/800px_koala_ag1.jpg',
        '/images/sampledata/parks/animals/800px_phyllopteryx_taeniolatus1.jpg',
        '/images/sampledata/parks/animals/800px_wobbegong.jpg',
        '/images/sampledata/parks/banner_cradle.jpg',
        '/images/sampledata/parks/landscape/120px_pinnacles_western_australia.jpg',
        '/images/sampledata/parks/landscape/120px_rainforest_bluemountainsnsw.jpg',
        '/images/sampledata/parks/landscape/180px_ormiston_pound.jpg',
        '/images/sampledata/parks/landscape/250px_cradle_mountain_seen_from_barn_bluff.jpg',
        '/images/sampledata/parks/landscape/727px_rainforest_bluemountainsnsw.jpg',
        '/images/sampledata/parks/landscape/800px_cradle_mountain_seen_from_barn_bluff.jpg',
        '/images/sampledata/parks/landscape/800px_ormiston_pound.jpg',
        '/images/sampledata/parks/landscape/800px_pinnacles_western_australia.jpg',
        '/images/sampledata/parks/parks.gif'
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

        // set the db object
        $this->_db = JFactory::getDBO();
    }

    /**
     * I'm the controller - I run methods based on the request integer
     */
    public function run()
    {
        if (property_exists($this->_dataObj, 'c')) {

            $c = ( int )$this->_dataObj->c;
            if (array_key_exists($c, $this->_methods)) {
                bfLog::log('Calling methd ' . $this->_methods [$c]);
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
     * Method to delete a named file when we know its id
     */
    private function deleteFile()
    {

        // Get the filewithpath based on the id
        $this->_db->setQuery('SELECT filewithpath from bf_files WHERE id = ' . ( int )$this->_dataObj->file_id);
        $filewithpath = $this->_db->loadResult();

        // check that the file we got form the database matches to the path we think it should be
        if ($this->_dataObj->filewithpath != $filewithpath) {
            bfEncrypt::reply('failure', array(
                'msg' => 'File Not matching: ' . $this->_dataObj->filewithpath . ' !== ' . $filewithpath
            ));
        }

        // If the file doesnt exist then remove from cache and reply
        if (!file_exists(JPATH_BASE . $filewithpath)) {
            $this->_db->setQuery("DELETE FROM bf_files WHERE id = " . ( int )$this->_dataObj->file_id);
            $this->_db->query();
            bfEncrypt::reply('failure', array(
                'msg' => 'File doesn\'t exist: ' . $filewithpath
            ));
        }

        // Attempt to force deletion
        if (!is_writable(JPATH_BASE . $filewithpath)) {
            @chmod(JPATH_BASE . $filewithpath, 0777);
        }

        // delete the file, making sure we prefix with a path
        if (@unlink(JPATH_BASE . $filewithpath)) {
            $this->_db->setQuery("DELETE FROM bf_files WHERE id = " . ( int )$this->_dataObj->file_id);
            $this->_db->query();

            // File deleted - say yes
            bfEncrypt::reply('success', array(
                'msg' => 'File deleted: ' . $filewithpath
            ));
        } else {

            // File deleted - say no
            bfEncrypt::reply('failure', array(
                'msg' => 'File Not Deleted: ' . $filewithpath
            ));
        }
    }

    /**
     * I delete a folder
     */
    private function deleteFolder()
    {

        // Require more complex methods for dealing with files
        require 'bfFilesystem.php';

        // init our return msg
        $msg = array();

        // hidden or normal - needed for ALL deletes
        $type = $this->_dataObj->type;

        // switch on type
        if ($type == 'hidden') {

            // get the folders cache id
            $folder_id = $this->_dataObj->fid;

            // init
            $msgToReturn = array();
            $msgToReturn ['deleted_files'] = 0;
            $msgToReturn ['deleted_folders'] = 0;
            $msgToReturn ['left'] = 0;

            // Do we want to delete all hidden folders?
            if ($folder_id == 'ALL') { // All meaning all hidden folders, not ALL folders in our db!!

                $this->_dataObj->ls = 0;
                $this->_dataObj->limit = 999999999;

                // get all the hidden folders
                $folders = $this->getHiddenFolders(TRUE);
                bfLog::log('Deleting this many folders : ' . count($folders));

                // foreach hidden folder, delete that hidden folder recursivly
                foreach ($folders as $folder) {

                    // delete recursive
                    bfLog::log('Deleting folder: ' . JPATH_BASE . $folder->folderwithpath);
                    $msg = Bf_Filesystem::deleteRecursive(JPATH_BASE . $folder->folderwithpath, TRUE, $msg);

                    $this->_db->setQuery('DELETE FROM bf_folders WHERE folderwithpath LIKE "' . $folder->folderwithpath . '%"');
                    $this->_db->loadResult();
                    $this->_db->setQuery('DELETE FROM bf_files WHERE filewithpath LIKE "' . $folder->folderwithpath . '%"');
                    $this->_db->loadResult();

                    // oh dear we failed
                    if ($msg ['result'] == 'failure') {
                        $msgToReturn = array();
                        $msgToReturn ['deleted_files'] = count(@$msg ['deleted_files']);
                        $msgToReturn ['deleted_folders'] = count(@$msg ['deleted_folders']);
                        $msgToReturn ['left'] = $this->getHiddenFolders(TRUE);

                        // send back the error message
                        bfEncrypt::reply('failure', array(
                            'msg' => 'Problem!: ' . json_encode($msgToReturn)
                        ));
                    }
                }

            } else {

                // select the folder to delete
                $this->_db->setQuery('SELECT folderwithpath FROM bf_folders WHERE id = ' . ( int )$folder_id);
                $folderwithpath = $this->_db->loadResult();

                // if the folder is not there
                if (!$folderwithpath) {
                    bfEncrypt::reply('failure', array(
                        'msg' => 'Folder Not Found #msg2#: ' . $folderwithpath
                    ));
                }

                $msg = Bf_Filesystem::deleteRecursive(JPATH_BASE . $folderwithpath, TRUE, $msg);
            }

            // if we deleted some folders
            if (count($msg ['deleted_folders'])) {
                foreach ($msg ['deleted_folders'] as $folder) {
                    $fwp = str_replace('//', '/', str_replace(JPATH_BASE, '', $folder));

                    $sql = "DELETE FROM bf_folders where folderwithpath = '" . $fwp . "'";

                    $this->_db->setQuery($sql);
                    $this->_db->query();
                }
            }

            // if we deleted some files
            if (count($msg ['deleted_files'])) {
                foreach ($msg ['deleted_files'] as $file) {
                    $fwp = str_replace('//', '/', str_replace(JPATH_BASE, '', $file));

                    $sql = "DELETE FROM bf_files where filewithpath = '" . $fwp . "'";
                    $this->_db->setQuery($sql);
                    $this->_db->query();
                }
            }

            // reply back with our warning or success message
            $msgToReturn = array();
            $msgToReturn ['deleted_files'] = count($msg ['deleted_files']);
            $msgToReturn ['deleted_folders'] = count($msg ['deleted_folders']);
            $msgToReturn ['left'] = count($this->getHiddenFolders(TRUE));

            bfEncrypt::reply('success', array(
                'msg' => json_encode($msgToReturn)
            ));
        }

        if ($type = 'deleteinstallation') {
            $folders = $this->getFolders(JPATH_BASE);

            foreach ($folders as $folder) {
                if (preg_match('/installation|installation.old|docs\/installation|install|installation.bak|installation.old|installation.backup|installation.delete/i', $folder)) {
                    $installationFolders[] = $folder;
                }
            }

            foreach ($installationFolders as $folderwithpath) {
                bfLog::log('Deleting folder: ' . $folderwithpath);
                $msg = Bf_Filesystem::deleteRecursive(JPATH_BASE . $folderwithpath, TRUE, $msg);
            }

            bfEncrypt::reply('success', array(
                'msg' => 'ok'
            ));
        }
    }

    /**
     * @param bool $internal
     *
     * @return array|mixed
     */
    private function getHiddenFolders($internal = FALSE)
    {
        $limitstart = ( int )$this->_dataObj->ls;
        $limit = ( int )$this->_dataObj->limit;

        if (!$limitstart) {
            $limitstart = 0;
        }
        if (!$limit) {
            $limit = '9999999999999999';
        }
        $this->_db->setQuery('SELECT * FROM bf_folders WHERE folderwithpath LIKE "%/.%" LIMIT ' . ( int )$limitstart . ', ' . $limit);
        $folders = $this->_db->loadObjectList();

        if ($internal === TRUE) {
            return $folders;
        }

        $this->_db->setQuery('SELECT count(*) FROM bf_folders WHERE folderwithpath LIKE "%/.%"');
        $count = $this->_db->loadResult();

        bfEncrypt::reply('success', array(
            'files' => $folders,
            'total' => $count
        ));
    }

    /**
     * Function taken from Akeeba filesystem.php
     *
     * Akeeba Engine
     * The modular PHP5 site backup engine
     *
     * @copyright Copyright (c)2009 Nicholas K. Dionysopoulos
     * @license   GNU GPL version 3 or, at your option, any later version
     * @package   akeebaengine
     * @version   Id: scanner.php 158 2010-06-10 08:46:49Z nikosdion
     */
    private function getFolders($folder)
    {

        // Initialize variables
        $arr = array();
        $false = FALSE;

        $folder = trim($folder);

        if (!is_dir($folder) && !is_dir($folder . DIRECTORY_SEPARATOR) || is_link($folder . DIRECTORY_SEPARATOR) || is_link($folder) || !$folder)
            return $false;

        if (@file_exists($folder . DIRECTORY_SEPARATOR . '.myjoomla.ignore.folder')) {
            return array();
        }

        $handle = @opendir($folder);
        if ($handle === FALSE) {
            $handle = @opendir($folder . DIRECTORY_SEPARATOR);
        }
        // If directory is not accessible, just return FALSE
        if ($handle === FALSE) {
            return $false;
        }

        while ((($file = @readdir($handle)) !== FALSE)) {
            if (($file != '.') && ($file != '..') && (trim($file) != NULL)) {
                $ds = ($folder == '') || ($folder == DIRECTORY_SEPARATOR) || (@substr($folder, -1) == DIRECTORY_SEPARATOR) || (@substr($folder, -1) == DIRECTORY_SEPARATOR) ? '' : DIRECTORY_SEPARATOR;
                $dir = trim($folder . $ds . $file);
                $isDir = @is_dir($dir);
                if ($isDir) {
                    $arr [] = $this->cleanupFileFolderName(str_replace(JPATH_BASE, '', $folder . DIRECTORY_SEPARATOR . $file));
                }
            }
        }
        @closedir($handle);

        return $arr;
    }

    /**
     * Clean up a string, a path name
     *
     * @param string $str
     *
     * @return string
     */
    private function cleanupFileFolderName($str)
    {
        $str = str_replace('////', '/', $str);
        $str = str_replace('///', '/', $str);
        $str = str_replace('//', '/', $str);
        $str = str_replace('\\/', '/', $str);
        $str = str_replace("\\t", '/t', $str);
        $str = str_replace("\/", '/', $str);

        return addslashes($str);
    }

    /**
     * I get the number of core files that failed the hash checking
     */
    private function getCoreHashFailedFileList()
    {
        // set up the limit and limit start for the SQL
        $limitstart = ( int )$this->_dataObj->ls;
        $limit = ( int )$this->_dataObj->limit;
        $this->_db->setQuery('SELECT id, filewithpath, filemtime, fileperms FROM bf_files WHERE hashfailed = 1 LIMIT ' . $limitstart . ', ' . $limit);

        // Get the files from the cache
        $files = $this->_db->loadObjectList();

        // get the count as well, for pagination
        $this->_db->setQuery('SELECT count(*) from bf_files WHERE hashfailed = 1');
        $count = $this->_db->loadResult();

        // send back the totals
        bfEncrypt::reply('success', array(
            'files' => $files,
            'total' => $count
        ));
    }

    /**
     * I get list of database tables that begin with bak_
     */
    private function deleteBakTables()
    {
        $tables = $this->getBakTables(TRUE);

        // for all the bak tables
        foreach ($tables as $table) {

            // compose the sql query
            $this->_db->setQuery("DROP TABLE " . $table[0]);

            // delete the bak_tables
            $this->_db->query();
        }

        $count = count($tables);

        // send back the totals
        bfEncrypt::reply('success', array(
            'tables' => $tables,
            'total' => $count
        ));
    }

    /**
     * I get list of database tables that begin with bak_
     */
    private function getBakTables($internal = FALSE)
    {
        // Get the database name
        $config = JFactory::getApplication();
        $dbname = $config->getCfg('db', '');

        // compose the sql query
        $this->_db->setQuery("SHOW TABLES WHERE `Tables_in_{$dbname}` like 'bak_%'");

        // Get the bak_tables
        $tables = $this->_db->loadRowList();

        // return array if we are internally calling this method
        if ($internal === TRUE) {
            return $tables;
        }

        // count them
        $count = count($tables);

        // send back the totals
        bfEncrypt::reply('success', array(
            'tables' => $tables,
            'total' => $count
        ));
    }

    /**
     * Get a list of folders with 777 permissions
     */
    private function getFolderPermissions()
    {
        // set up the limit and the limitstart SQL
        $limitstart = ( int )$this->_dataObj->ls;
        $limit = ( int )$this->_dataObj->limit;
        $this->_db->setQuery('SELECT `id`, `folderwithpath`, `folderinfo` from bf_folders WHERE folderinfo = "777" LIMIT ' . $limitstart . ', ' . $limit);

        // get the files
        $files = $this->_db->loadObjectList();

        // get the count for pagination
        $this->_db->setQuery('SELECT count(*) from bf_folders WHERE `folderinfo` = "777"');
        $count = $this->_db->loadResult();

        // send back the totals
        bfEncrypt::reply('success', array(
            'files' => $files,
            'total' => $count
        ));
    }

    /**
     * Get a list of files with 777 permissions
     */
    private function getFilePermissions()
    {
        // set up the limit and the limitstart SQL
        $limitstart = ( int )$this->_dataObj->ls;
        $limit = ( int )$this->_dataObj->limit;
        $this->_db->setQuery('SELECT id, filewithpath, fileperms from bf_files WHERE fileperms = "0777" OR fileperms = "777" LIMIT ' . ( int )$limitstart . ', ' . $limit);

        // get the files
        $files = $this->_db->loadObjectList();

        // get the count for pagination
        $this->_db->setQuery('SELECT count(*) from bf_files WHERE fileperms = "0777" OR fileperms = "777"');
        $count = $this->_db->loadResult();

        // send back the totals
        bfEncrypt::reply('success', array(
            'files' => $files,
            'total' => $count
        ));
    }

    /**
     * Set the permissions on files that have 777 perms to be 644
     */
    private function setFilePermissions()
    {
        $fixed = 0;
        $errors = 0;

        $this->_db->setQuery('SELECT id, filewithpath from bf_files WHERE fileperms = "0777" OR fileperms = "777"');
        $files = $this->_db->loadObjectList();
        foreach ($files as $file) {
            if (@chmod(JPATH_BASE . $file->filewithpath, 0644)) {
                $fixed++;
                $this->_db->setQuery('UPDATE bf_files SET fileperms = "0644" WHERE id = "' . ( int )$file->id . '"');
                $this->_db->query();
            } else {
                $errors++;
            }
        }

        $this->_db->setQuery('SELECT count(*) FROM bf_folders WHERE folderinfo LIKE "%777%"');
        $folders_777 = $this->_db->LoadResult();

        $res = new stdClass ();
        $res->errors = $errors;
        $res->fixed = $fixed;
        $res->leftover = $folders_777;

        bfEncrypt::reply('success', $res);
    }

    /**
     * Return the list of files that have been flagged as containing patterns that match our suspect patterns
     * These maybe false positives for suspect content, but might be examples of bad code standards like using
     * ../../../ or eval() method.
     */
    private function getSuspectContentFileList()
    {
        // make sure we only retrieve a small dataset
        $limitstart = ( int )$this->_dataObj->ls;
        $sort = $this->_dataObj->s;

        if (!in_array($sort, array('filewithpath', 'filemtime'))) {
            die('Invalid Sort');
        }

        if ($sort == 'filemtime') {
            $sort = 'filemtime DESC';
        }

        $limit = ( int )$this->_dataObj->limit;

        // Set the query
        $this->_db->setQuery('SELECT id, iscorefile, filewithpath, filemtime, fileperms, `size`, iscorefile from bf_files
                                WHERE suspectcontent = 1
                                ORDER BY ' . $sort . '
                                LIMIT ' . ( int )$limitstart . ', ' . $limit);

        // Get an object list of files
        $files = $this->_db->loadObjectList();

        // see how many files there are in total without a limit
        $this->_db->setQuery('SELECT count(*) from bf_files WHERE suspectcontent = 1');
        $count = $this->_db->loadResult();

        // Only show files that still exist on the hard drive
        $existingFiles = array();
        foreach ($files as $k => $file) {
            if (file_exists(JPATH_BASE . $file->filewithpath)) {
                $existingFiles[] = $file;
            } else {
                $this->_db->setQuery(sprintf('DELETE FROM bf_files WHERE filewithpath = "%s"',
                    $file->filewithpath));
                $this->_db->query();

                $count--;
            }
        }

        // return an encrypted reply
        bfEncrypt::reply('success', array(
            'files' => $existingFiles,
            'total' => $count
        ));
    }

    /**
     * @param bool $internal
     *
     * @return array|mixed
     */
    private function getInstallationFolders($internal = FALSE)
    {

        $folders = $this->getFolders(JPATH_BASE);
        foreach ($folders as $folder) {
            if (preg_match('/installation|installation.old|docs\/installation|install|installation.bak|installation.old|installation.backup|installation.delete/i', $folder)) {
                $installationFolders[] = $folder;
            }
        }

        bfEncrypt::reply('success', array(
            'files' => $installationFolders,
            'total' => count($installationFolders)
        ));
    }

    /**
     * @param bool $internal
     *
     * @return array|mixed
     */
    private function getRecentlyModified($internal = FALSE)
    {
        $limitstart = ( int )$this->_dataObj->ls;
        $limit = ( int )$this->_dataObj->limit;
        if (!$limitstart) {
            $limitstart = 0;
        }
        if (!$limit) {
            $limit = '9999999999999999';
        }

        $sql = "SELECT * FROM bf_files WHERE filemtime > '" . strtotime('-3 days', time()) . "' ORDER BY filemtime DESC LIMIT " . ( int )$limitstart . ', ' . $limit;
        $this->_db->setQuery($sql);
        $files = $this->_db->LoadObjectList();

        if ($internal === TRUE) {
            return $files;
        }

        $this->_db->setQuery("SELECT count(*) FROM bf_files WHERE filemtime > '" . strtotime('-3 days', time()) . "'");
        $count = $this->_db->loadResult();

        bfEncrypt::reply('success', array(
            'files' => $files,
            'total' => $count
        ));
    }

    /**
     * @param bool $internal
     *
     * @return array|mixed
     */
    private function getHtaccessFiles($internal = FALSE)
    {
        $limitstart = ( int )$this->_dataObj->ls;
        $limit = ( int )$this->_dataObj->limit;
        if (!$limitstart) {
            $limitstart = 0;
        }
        if (!$limit) {
            $limit = '9999999999999999';
        }

        $sql = "SELECT * FROM bf_files WHERE filewithpath LIKE '%/.htaccess' ORDER BY filewithpath DESC LIMIT " . ( int )$limitstart . ', ' . $limit;
        $this->_db->setQuery($sql);
        $files = $this->_db->LoadObjectList();

        if ($internal === TRUE) {
            return $files;
        }

        $this->_db->setQuery("SELECT count(*) FROM bf_files WHERE filewithpath LIKE '%/.htaccess'");
        $count = $this->_db->loadResult();

        bfEncrypt::reply('success', array(
            'files' => $files,
            'total' => $count
        ));
    }

    /**
     * @param bool $internal
     *
     * @return array|mixed
     */
    private function getLargefiles($internal = FALSE)
    {
        $limitstart = ( int )$this->_dataObj->ls;
        $limit = ( int )$this->_dataObj->limit;
        if (!$limitstart) {
            $limitstart = 0;
        }
        if (!$limit) {
            $limit = '9999999999999999';
        }

        $sql = 'SELECT * FROM bf_files WHERE SIZE > 2097152 ORDER BY filemtime DESC LIMIT ' . ( int )$limitstart . ', ' . $limit;
        $this->_db->setQuery($sql);
        $files = $this->_db->LoadObjectList();

        if ($internal === TRUE) {
            return $files;
        }

        $this->_db->setQuery('SELECT COUNT(*) FROM bf_files WHERE SIZE > 2097152');
        $count = (int)$this->_db->loadResult();

        bfEncrypt::reply('success', array(
            'files' => $files,
            'total' => $count
        ));
    }

    /**
     * @param bool $internal
     *
     * @return array|mixed
     */
    private function getArchivefiles($internal = FALSE)
    {
        $limitstart = ( int )$this->_dataObj->ls;
        $limit = ( int )$this->_dataObj->limit;
        if (!$limitstart) {
            $limitstart = 0;
        }
        if (!$limit) {
            $limit = '9999999999999999';
        }

        $sql = 'SELECT * FROM bf_files WHERE
		filewithpath LIKE "%.zip"
		OR filewithpath LIKE "%.tar"
		OR filewithpath LIKE "%.tar.gz"
		OR filewithpath LIKE "%.bz2"
		OR filewithpath LIKE "%.gzip"
		OR filewithpath LIKE "%.bzip2" ORDER BY filemtime DESC LIMIT ' . ( int )$limitstart . ', ' . $limit;
        $this->_db->setQuery($sql);
        $files = $this->_db->LoadObjectList();

        if ($internal === TRUE) {
            return $files;
        }

        $this->_db->setQuery('SELECT count(*) FROM bf_files WHERE
		filewithpath LIKE "%.zip"
		OR filewithpath LIKE "%.tar"
		OR filewithpath LIKE "%.tar.gz"
		OR filewithpath LIKE "%.bz2"
		OR filewithpath LIKE "%.gzip"
		OR filewithpath LIKE "%.bzip2"');
        $count = (int)$this->_db->loadResult();

        bfEncrypt::reply('success', array(
            'files' => $files,
            'total' => $count
        ));
    }

    /**
     * @param bool $internal
     *
     * @return array|mixed
     */
    private function getPhpinwrongplace($internal = FALSE)
    {
        $limitstart = ( int )$this->_dataObj->ls;
        $limit = ( int )$this->_dataObj->limit;
        if (!$limitstart) {
            $limitstart = 0;
        }
        if (!$limit) {
            $limit = '9999999999999999';
        }

        $sql = 'SELECT * FROM bf_files AS b WHERE filewithpath REGEXP "^/images/.*\.php$" ORDER BY filemtime DESC LIMIT ' . ( int )$limitstart . ', ' . $limit;
        $this->_db->setQuery($sql);
        $files = $this->_db->LoadObjectList();

        if ($internal === TRUE) {
            return $files;
        }

        $count = (int)count($files);

        bfEncrypt::reply('success', array(
            'files' => $files,
            'total' => $count
        ));
    }

    /**
     * @param bool $internal
     *
     * @return array|mixed
     */
    private function getTmpfiles($internal = FALSE)
    {
        $limitstart = ( int )$this->_dataObj->ls;
        $limit = ( int )$this->_dataObj->limit;
        if (!$limitstart) {
            $limitstart = 0;
        }
        if (!$limit) {
            $limit = '9999999999999999';
        }

        $sql = 'SELECT * FROM bf_files WHERE
		filewithpath LIKE "/tmp%"
		AND
				filewithpath != "/tmp/index.html"
		ORDER BY filemtime DESC LIMIT ' . ( int )$limitstart . ', ' . $limit;
        $this->_db->setQuery($sql);
        $files = $this->_db->LoadObjectList();

        if ($internal === TRUE) {
            return $files;
        }

        $this->_db->setQuery('SELECT count(*) FROM bf_files WHERE
		filewithpath LIKE "/tmp%"
		AND
				filewithpath != "/tmp/index.html"
		ORDER BY filemtime');
        $count = (int)$this->_db->loadResult();

        bfEncrypt::reply('success', array(
            'files' => $files,
            'total' => $count
        ));
    }

    private function clearFluffFiles()
    {
        require 'bfFilesystem.php';

        foreach ($this->fluffFiles as $file) {

            // ensure we are based correctly
            $fileWithPath = JPATH_BASE . $file;

            // Remove File.
            unlink($fileWithPath);
        }

        $this->getFlufffiles(TRUE);
    }

    /**
     * @param bool $internal
     *
     * @return array|mixed
     */
    private function getFlufffiles($internal = FALSE)
    {
        $files = array();
        $files['present'] = array();
        $files['notpresent'] = array();

        foreach ($this->fluffFiles as $file) {

            // ensure we are based correctly
            $fileWithPath = JPATH_BASE . $file;

            // determine if the file is present or not
            if (@file_exists($fileWithPath)) { //@ to avoid any nasty warnings
                $files['present'][] = $file;
            } else {
                $files['notpresent'][] = $file;
            }
        }

        bfEncrypt::reply('success', array(
            'total' => count($files['present']),
            'files' => $files
        ));
    }

    /**
     * @param bool $internal
     *
     * @return array|mixed
     */
    private function getRenamedToHide($internal = FALSE)
    {
        $limitstart = ( int )$this->_dataObj->ls;
        $limit = ( int )$this->_dataObj->limit;
        if (!$limitstart) {
            $limitstart = 0;
        }
        if (!$limit) {
            $limit = '9999999999999999';
        }

        $sql = 'SELECT * FROM bf_files WHERE
								filewithpath LIKE "%.backup%"
								OR
								filewithpath LIKE "%.bak%"
								OR
								filewithpath LIKE "%.old%"
								ORDER BY filemtime DESC LIMIT ' . ( int )$limitstart . ', ' . $limit;
        $this->_db->setQuery($sql);
        $files = $this->_db->LoadObjectList();

        if ($internal === TRUE) {
            return $files;
        }

        $this->_db->setQuery('SELECT count(*) FROM bf_files WHERE
								filewithpath LIKE "%.backup%"
								OR
								filewithpath LIKE "%.bak%"
								OR
								filewithpath LIKE "%.old%"');
        $count = $this->_db->loadResult();

        bfEncrypt::reply('success', array(
            'files' => $files,
            'total' => $count
        ));
    }

    private function clearTmpFiles()
    {
        require 'bfFilesystem.php';

        $filesAndFolders = Bf_Filesystem::readDirectory(JPATH_ROOT . '/tmp', '.', true);

        foreach ($filesAndFolders as $pointer) {

            $pointer = JPATH_ROOT . '/tmp/' . $pointer;

            if (is_dir($pointer)) {
                bfLog::log('Deleting ' . $pointer);
                Bf_Filesystem::deleteRecursive($pointer, TRUE);
            } else {
                bfLog::log('Deleting ' . $pointer);
                unlink($pointer);
            }
        }

        file_put_contents(JPATH_ROOT . '/tmp/index.html', '<html><body bgcolor="#FFFFFF"></body></html> ');

        $sql = 'DELETE FROM bf_files WHERE
		          filewithpath LIKE "/tmp%"
		            AND
				  filewithpath != "/tmp/index.html"';
        $this->_db->setQuery($sql);
        $this->_db->query();

        bfEncrypt::reply('success', array(
            'res' => TRUE
        ));
    }

    /**
     * @param bool $internal
     *
     * @return array|mixed
     */
    private function getDotfiles($internal = FALSE)
    {

        $limitstart = ( int )$this->_dataObj->ls;
        $limit = ( int )$this->_dataObj->limit;
        if (!$limitstart) {
            $limitstart = 0;
        }
        if (!$limit) {
            $limit = '9999999999999999';
        }

        $sql = "SELECT * FROM bf_files WHERE filewithpath LIKE \"%/.%\" ORDER BY filemtime DESC LIMIT " . ( int )$limitstart . ', ' . $limit;
        $this->_db->setQuery($sql);
        $files = $this->_db->LoadObjectList();

        if ($internal === TRUE) {
            return $files;
        }

        $this->_db->setQuery('SELECT count(*) FROM bf_files WHERE filewithpath LIKE "%/.%"');
        $count = $this->_db->loadResult();

        bfEncrypt::reply('success', array(
            'files' => $files,
            'total' => $count
        ));
    }

    /**
     * @param bool $internal
     *
     * @return array|mixed
     */
    private function getEncrypted($internal = FALSE)
    {

        $limitstart = ( int )$this->_dataObj->ls;
        $limit = ( int )$this->_dataObj->limit;
        if (!$limitstart) {
            $limitstart = 0;
        }
        if (!$limit) {
            $limit = '9999999999999999';
        }

        $sql = "SELECT * FROM bf_files WHERE encrypted = 1 ORDER BY filemtime DESC LIMIT " . ( int )$limitstart . ', ' . $limit;
        $this->_db->setQuery($sql);
        $files = $this->_db->LoadObjectList();

        if ($internal === TRUE) {
            return $files;
        }

        $this->_db->setQuery("SELECT count(*) FROM bf_files WHERE encrypted = 1");
        $count = $this->_db->loadResult();

        bfEncrypt::reply('success', array(
            'files' => $files,
            'total' => $count
        ));
    }

    /**
     * @param bool $internal
     *
     * @return JUser|mixed|object
     */
    private function getUser($internal = FALSE)
    {


        switch ($this->_dataObj->searchfield) {
            case 'username' :
                $sql = "SELECT * FROM #__users WHERE username = '%s'";
                $sql = sprintf($sql, $this->_dataObj->searchvalue);
                $this->_db->setQuery($sql);
                $row = $this->_db->loadObject();
                break;
            case 'id' :
                $row = new JUser ();
                $row->load(( int )$this->_dataObj->searchvalue);
                break;
        }

        if ($row->id) {
            // NEVER let the users password leave the remote site
            $row->password = '**REMOVED**';
        }

        if ($internal === TRUE) {
            return $row;
        }

        bfEncrypt::reply('success', array(
            'user' => $row
        ));
    }

    /**
     * @throws exception Exception
     */
    private function setDbPrefix()
    {

        // Require more complex methods for dealing with files
        require 'bfFilesystem.php';


        $prefix = $this->_dataObj->prefix;
        try {
            $prefix = $this->_validateDbPrefix($prefix);

            /**
             * Performs the actual schema change
             *
             * @package   AdminTools
             * @copyright Copyright (c)2010-2011 Nicholas K. Dionysopoulos
             * @license   GNU General Public License version 3, or later
             *
             * @param $prefix string
             *                The new prefix
             *
             * @return bool False if the schema could not be changed
             */
            $config = JFactory::getConfig();
            if (version_compare(JVERSION, '3.0', 'ge')) {
                $oldprefix = $config->get('dbprefix', '');
                $dbname = $config->get('db', '');
            } else {
                $oldprefix = $config->getValue('config.dbprefix', '');
                $dbname = $config->getValue('config.db', '');
            }

            $db = $this->_db;
            $sql = "SHOW TABLES WHERE `Tables_in_{$dbname}` like '{$oldprefix}%'";
            $db->setQuery($sql);

            if (version_compare(JVERSION, '3.0', 'ge')) {
                $oldTables = $db->loadColumn();
            } else {
                $oldTables = $db->loadResultArray();
            }

            if (empty ($oldTables)) {
                throw new Exception ('Could not find any tables with the old prefix to change to the new prefix');
            }

            foreach ($oldTables as $table) {
                $newTable = $prefix . substr($table, strlen($oldprefix));
                $sql = "RENAME TABLE `$table` TO `$newTable`";
                $db->setQuery($sql);
                if (!$db->query()) {
                    // Something went wrong; I am pulling the plug and hope for
                    // the best
                    throw new Exception ('Something went wrong; I am pulling the plug and hope for the best - Contact our support URGENTLY');
                }
            }

            /**
             * Updates the configuration.php file with the given prefix
             *
             * @package   AdminTools
             * @copyright Copyright (c)2010-2011 Nicholas K. Dionysopoulos
             * @license   GNU General Public License version 3, or later
             *
             * @param $prefix string
             *                The prefix to write to the configuration.php file
             *
             * @return bool False if writing to the file was not possible
             */
            // Load the configuration and replace the db prefix
            $config = JFactory::getConfig();
            if (version_compare(JVERSION, '3.0', 'ge')) {
                $oldprefix = $config->get('dbprefix', $prefix);
            } else {
                $oldprefix = $config->getValue('config.dbprefix', $prefix);
            }
            if (version_compare(JVERSION, '3.0', 'ge')) {
                $config->set('dbprefix', $prefix);
            } else {
                $config->setValue('config.dbprefix', $prefix);
            }

            $newConfig = $config->toString('PHP', 'config', array(
                'class' => 'JConfig'
            ));
            // On some occasions, Joomla! 1.6 ignores the configuration and
            // produces "class c". Let's fix this!
            $newConfig = str_replace('class c {', 'class JConfig {', $newConfig);
            $newConfig = str_replace('namespace c;', '', $newConfig);

            if (version_compare(JVERSION, '3.0', 'ge')) {
                $config->set('dbprefix', $oldprefix);
            } else {
                $config->setValue('config.dbprefix', $oldprefix);
            }

            // Try to write out the configuration.php
            $filename = JPATH_ROOT . DIRECTORY_SEPARATOR . 'configuration.php';
            $result = Bf_Filesystem::_write($filename, $newConfig);
            if ($result !== FALSE) {
                bfEncrypt::reply('success', array(
                    'prefix' => $prefix
                ));
            } else {
                bfEncrypt::reply(bfReply::ERROR, array(
                    'msg' => 'Could Not Save Config'
                ));
            }
        } catch (Exception $e) {
            bfEncrypt::reply(bfReply::ERROR, array(
                'msg' => $e->getMessage()
            ));
        }
    }

    /**
     * Validates a prefix.
     * The prefix must be 3-6 lowercase characters followed by
     * an underscore and must not alrady exist in the current database. It must
     * also not be jos_ or bak_.
     *
     * @package   AdminTools
     * @copyright Copyright (c)2010-2011 Nicholas K. Dionysopoulos
     *
     * @param $prefix string
     *                The prefix to check
     *
     * @throws exception
     * @return string bool validated prefix or false if the prefix is invalid
     */
    private function _validateDbPrefix($prefix)
    {


        // Check that the prefix is not jos_ or bak_
        if (($prefix == 'jos_') || ($prefix == 'bak_')) {
            throw new exception ('Cannot be a standard prefix like jos_ or bak_');
        }

        // Check that we're not trying to reuse the same prefix
        $config = JFactory::getConfig();
        if (version_compare(JVERSION, '3.0', 'ge')) {
            $oldprefix = $config->get('dbprefix', '');
        } else {
            $oldprefix = $config->getValue('config.dbprefix', '');
        }
        if ($prefix == $oldprefix) {
            throw new exception ('Cannot be the same as existing prefix');
        }

        // Check the length
        $pLen = strlen($prefix);
        if (($pLen < 4) || ($pLen > 6)) {
            throw new exception ('Prefix must be between 4 and 6 chars');
        }

        // Check that the prefix ends with an underscore
        if (substr($prefix, -1) != '_') {
            throw new exception ('Prefix must end with an underscore');
        }

        // Check that the part before the underscore is lowercase letters
        $valid = preg_match('/[\w]_/i', $prefix);
        if ($valid === 0) {
            throw new exception ('Prefix must be all lowercase');
        }

        // Turn the prefix into lowercase
        $prefix = strtolower($prefix);

        // Check if the prefix already exists in the database
        $db = $this->_db;
        if (version_compare(JVERSION, '3.0', 'ge')) {
            $dbname = $config->get('db', '');
        } else {
            $dbname = $config->getValue('config.db', '');
        }
        $sql = "SHOW TABLES WHERE `Tables_in_{$dbname}` like '{$prefix}%'";
        $db->setQuery($sql);
        if (version_compare(JVERSION, '3.0', 'ge')) {
            $existing_tables = $db->loadColumn();
        } else {
            $existing_tables = $db->loadResultArray();
        }
        if (count($existing_tables)) {
            // Sometimes we have false alerts, e.g. a prefix of dev_ will match
            // tables starting with dev15_ or dev16_
            $realCount = 0;
            foreach ($existing_tables as $check) {
                if (substr($check, 0, $pLen) == $prefix) {
                    $realCount++;
                    break;
                }
            }
            if ($realCount) {
                throw new exception ('Prefix already exists in the database');
            }
        }

        return $prefix;
    }

    /**
     *
     */
    private function setUser()
    {
        $email = $this->_dataObj->email;
        $pass = $this->_dataObj->password;
        $username = $this->_dataObj->username;
        $where = $this->_dataObj->where;

        if (!$email || !$pass || !$username || !$where) {
            bfEncrypt::reply('failure', array(
                'msg' => 'Not all required parts set'
            ));
        }


        $sql = 'UPDATE #__users SET username="%s", password="%s", email ="%s" WHERE %s';
        $sql = sprintf($sql, $username, $pass, $email, $where);
        $this->_db->setQuery($sql);
        $id = $this->_db->query();

        bfEncrypt::reply('success', array(
            'usersaved' => $id
        ));
    }

    /**
     * @param bool $internal
     *
     * @return array|mixed
     */
    private function getErrorLogs($internal = FALSE)
    {

        $limitstart = ( int )$this->_dataObj->ls;
        $limit = ( int )$this->_dataObj->limit;
        if (!$limitstart) {
            $limitstart = 0;
        }
        if (!$limit) {
            $limit = '9999999999999999';
        }

        $sql = "SELECT * FROM bf_files WHERE filewithpath LIKE '%error_log' ORDER BY filemtime DESC LIMIT " . ( int )$limitstart . ', ' . $limit;
        $this->_db->setQuery($sql);
        $files = $this->_db->LoadObjectList();

        if ($internal === TRUE) {
            return $files;
        }

        $this->_db->setQuery("SELECT count(*) FROM bf_files WHERE filewithpath LIKE '%error_log'");
        $count = $this->_db->loadResult();

        bfEncrypt::reply('success', array(
            'files' => $files,
            'total' => $count
        ));
    }

    private function saveRobotsFile()
    {
        if (file_put_contents(JPATH_BASE . '/robots.txt', base64_decode($this->_dataObj->filecontents))) {
            bfEncrypt::reply('success', array(
                'msg' => 'File saved!'
            ));
        } else {
            bfEncrypt::reply('error', array(
                'msg' => 'File could not be saved!'
            ));
        }

    }

    private function getRobotsFile()
    {

        $this->_db->setQuery('SELECT id from bf_files WHERE filewithpath = "/robots.txt"');
        $id = $this->_db->loadResult();
        $this->downloadfile($id);
    }

    /**
     *
     */
    private function downloadfile($file_id = NULL)
    {

        if (NULL === $file_id) {
            $file_id = ( int )$this->_dataObj->f;
        }

        $this->_db->setQuery('SELECT filewithpath from bf_files WHERE id = ' . $file_id);
        $filename = $this->_db->loadResult();
        $filewithpath = JPATH_BASE . $filename;
        if (file_exists($filewithpath)) {
            $contents = file_get_contents($filewithpath);
            $contentsbase64_encode = base64_encode($contents);
            $obj = new stdclass ();
            $obj->filename = $filename;
            $obj->filemd5 = md5($contents);
            $obj->filewithpath = $filewithpath;
            $obj->filecontents = $contentsbase64_encode;
            $obj->filesize = filesize($filewithpath);
            $obj->basepath = JPATH_BASE;
            $obj->writeable = is_writable($filewithpath);

            bfEncrypt::reply('success', array(
                'file' => $obj
            ));
        } else {
            bfEncrypt::reply('error', array(
                'msg' => 'File No Longer Exists!'
            ));
        }
    }

    /**
     *
     */
    private function restorefile()
    {
        // Require more complex methods for dealing with files
        require 'bfFilesystem.php';


        // get the cached data on the file
        $this->_db->setQuery('SELECT filewithpath FROM bf_files WHERE id = ' . $this->_dataObj->fileid);
        $file_to_restore_nopath = $this->_db->loadResult();
        $file_to_restore = JPATH_BASE . $file_to_restore_nopath;

        $new_file_contents = base64_decode($this->_dataObj->filecontents);
        $new_md5 = md5($new_file_contents);
        if ($new_md5 !== $this->_dataObj->md5) {
            bfEncrypt::reply('failure', 'MD5 Check 1 Failed');
        }

        $this->_db->setQuery('SELECT hash FROM bf_core_hashes WHERE filewithpath = "' . $file_to_restore_nopath . '"');
        $core_md5 = $this->_db->loadResult();
        if ($core_md5 !== $this->_dataObj->md5) {
            bfEncrypt::reply('failure', 'MD5 Check 2 Failed');
        }

        $backup = file_get_contents($file_to_restore);
        Bf_Filesystem::_write($file_to_restore, $new_file_contents);

        if (md5_file($file_to_restore) !== $this->_dataObj->md5) {
            Bf_Filesystem::_write($file_to_restore, $backup);
            bfEncrypt::reply('failure', 'MD5 Check 3 Failed');
        }

        $this->_db->setQuery("UPDATE bf_files SET suspectcontent = 0 , hashfailed = 0 where filewithpath = '" . $file_to_restore_nopath . "'");
        $this->_db->query();

        bfEncrypt::reply('success', 'Restored OK');
    }

    /**
     *
     */
    private function checkFTPLayer()
    {

        $config = JFactory::getApplication();
        $ftp_pass = $config->getCfg('ftp_pass', '');
        $ftp_user = $config->getCfg('ftp_user', '');
        $ftp_enable = $config->getCfg('ftp_enable', '');
        $ftp_host = $config->getCfg('ftp_host', '');
        $ftp_root = $config->getCfg('ftp_root', '');
        if ($ftp_pass || $ftp_user || $ftp_enable == '1' || $ftp_host || $ftp_root) {
            bfEncrypt::reply('success', 1);
        } else {
            bfEncrypt::reply('success', 0);
        }
    }

    /**
     *
     */
    private function disableFTPLayer()
    {


        $config = JFactory::getApplication();
        $config_file = JPATH_BASE . '/configuration.php';

        $ftp_pass = $config->getCfg('ftp_pass', '');
        $ftp_user = $config->getCfg('ftp_user', '');
        $ftp_enable = $config->getCfg('ftp_enable', '');
        $ftp_host = $config->getCfg('ftp_host', '');
        $ftp_root = $config->getCfg('ftp_root', '');

        $config_txt = file_get_contents(JPATH_BASE . '/configuration.php');
        $config_txt = str_replace("\$ftp_enable = '1';", "\$ftp_enable = '0';", $config_txt);
        $config_txt = str_replace("\$ftp_pass = '" . $ftp_pass . "';", "\$ftp_pass = '';", $config_txt);
        $config_txt = str_replace("\$ftp_user = '" . $ftp_user . "';", "\$ftp_user = '';", $config_txt);
        $config_txt = str_replace("\$ftp_host = '" . $ftp_host . "';", "\$ftp_host = '';", $config_txt);
        $config_txt = str_replace("\$ftp_root = '" . $ftp_root . "';", "\$ftp_root = '';", $config_txt);

        @chmod($config_file, 0777);
        if (file_put_contents($config_file, $config_txt)) {
            @chmod($config_file, 0644);
            bfEncrypt::reply('success', 1);
        } else {
            bfEncrypt::reply('failure', 'Could not write configuration.php to ' . $config_file);
        }
    }

    /**
     *
     */
    private function setFolderPermissions()
    {
        $fixed = 0;
        $errors = 0;


        $this->_db->setQuery('SELECT id, folderwithpath from bf_folders WHERE folderinfo = "777"');
        $folders = $this->_db->loadObjectList();
        foreach ($folders as $folder) {
            if (@chmod(JPATH_BASE . $folder->folderwithpath, 0755)) {
                $fixed++;
                $this->_db->setQuery('UPDATE bf_folders SET folderinfo = "755" WHERE id = "' . ( int )$folder->id . '" AND folderinfo = "777"');
                $this->_db->query();
            } else {
                $errors++;
            }
        }

        $this->_db->setQuery('SELECT count(*) FROM bf_folders WHERE folderinfo LIKE "%777%"');
        $folders_777 = $this->_db->LoadResult();

        $res = new stdClass ();
        $res->errors = $errors;
        $res->fixed = $fixed;
        $res->leftover = $folders_777;

        bfEncrypt::reply('success', $res);
    }

    /**
     * I do some sanity checks then enable .htaccess
     */
    private function setHtaccess()
    {
        // Require more complex methods for dealing with files
        require 'bfFilesystem.php';

        // init bfDatabase


        // To
        $htaccess = JPATH_BASE . DIRECTORY_SEPARATOR . '.htaccess';

        // From
        $htaccesstxt = JPATH_BASE . DIRECTORY_SEPARATOR . 'htaccess.txt';

        $res = new stdClass();
        if (file_exists($htaccess)) {
            $res->result = 'ERROR';
            $res->msg = '.htaccess file already exists!';
            bfEncrypt::reply(bfReply::SUCCESS, $res);
        }

        if (!file_exists($htaccesstxt)) {
            $res->result = 'ERROR';
            $res->msg = 'htaccess.txt file not found, cannot proceed';
            bfEncrypt::reply(bfReply::SUCCESS, $res);
        }

        // Test we are on apache
        if (!preg_match('/Apache/i', $_SERVER['SERVER_SOFTWARE'])) {
            $res->result = 'ERROR';
            $res->msg = 'Server reported its not running Apache';
            bfEncrypt::reply(bfReply::SUCCESS, $res);
        }

        $didItWork = Bf_Filesystem::_write($htaccess, file_get_contents($htaccesstxt));

        if ($didItWork == FALSE) {
            $res->result = 'ERROR';
            $res->msg = 'Could not copy htaccess.txt to .htaccess';
            bfEncrypt::reply(bfReply::SUCCESS, $res);
        }

        $res->result = 'SUCCESS';
        $res->msg = '.htaccess enabled! - Go and test your site!';
        bfEncrypt::reply(bfReply::SUCCESS, $res);
    }

    /**
     * I set the new database credentials in /configuration.php after some testing
     */
    private function setDbCredentials()
    {
        // Require more complex methods for dealing with files
        require 'bfFilesystem.php';


        $password = $this->_dataObj->p;
        $user = $this->_dataObj->u;

        $res = $this->testDbCredentials(TRUE);
        if ($res->result == 'error') {
            bfEncrypt::reply(bfReply::ERROR, $res);
        }
        /**
         * Updates the configuration.php file with the given prefix
         * (some code from below)
         *
         * @package   AdminTools
         * @copyright Copyright (c)2010-2011 Nicholas K. Dionysopoulos
         * @license   GNU General Public License version 3, or later
         *
         * @param $prefix string
         *                The prefix to write to the configuration.php file
         *
         * @return bool False if writing to the file was not possible
         */
        // Load the configuration and replace the db prefix
        $config = JFactory::getConfig();
        if (version_compare(JVERSION, '3.0', 'ge')) {
            $olduser = $config->get('user');
            $oldpassword = $config->get('password');
            $host = $config->get('host');
        } else {
            $olduser = $config->getValue('config.user');
            $oldpassword = $config->getValue('configpassword');
            $host = $config->getValue('host');
        }

        if (version_compare(JVERSION, '3.0', 'ge')) {
            $config->set('user', $user);
            $config->set('password', $password);
        } else {
            $config->setValue('config.user', $user);
            $config->setValue('config.password', $password);
        }

        $newConfig = $config->toString('PHP', 'config', array(
            'class' => 'JConfig'
        ));

        // On some occasions, Joomla! 1.6 ignores the configuration and
        // produces "class c". Let's fix this!
        $newConfig = str_replace('class c {', 'class JConfig {', $newConfig);

        // Try to write out the configuration.php
        $filename = JPATH_ROOT . DIRECTORY_SEPARATOR . 'configuration.php';
        $result = Bf_Filesystem::_write($filename, $newConfig);

        // reconnect db! to use new credentials
        $newConnectionOptions['user'] = $user;
        $newConnectionOptions['password'] = $password;
        $newConnectionOptions['host'] = $host;

        // make new db connection
        $db = JDatabase::getInstance($newConnectionOptions);
        $db->setQuery('SHOW DATABASES  where `Database` NOT IN ("test", "information_schema", "mysql")');
        $dbs_visible = count($db->loadObjectList());

        if ($result !== FALSE) {
            bfEncrypt::reply('success', array(
                'msg' => 'Config saved!',
                'dbs_visible' => $dbs_visible
            ));
        } else {
            bfEncrypt::reply(bfReply::ERROR, array(
                'msg' => 'Could Not Save Config'
            ));
        }
    }

    /**
     * @param bool $internal
     *
     * @return stdClass
     */
    private function testDbCredentials($internal = FALSE)
    {
        try {

            $config = JFactory::getApplication();
            $pass = $this->_dataObj->p;
            $user = $this->_dataObj->u;
            $host = $config->getCfg('host', '');
            $db = $config->getCfg('db', '');
            $link = @mysql_connect($host, $user, $pass);
            $msg = new stdClass ();
            if (!$link) {
                $msg->msg = trim(mysql_error() . ' Could not connect to mysql server with supplied credentials');
                $msg->result = 'error';
                if ($internal === TRUE) {
                    return $msg;
                }
                bfEncrypt::reply('success', $msg);
            }
            if (!@mysql_select_db($db)) {
                $msg->msg = trim(mysql_error() . ' Mysql User exists, but has no access to the database');
                $msg->result = 'error';
                if ($internal === TRUE) {
                    return $msg;
                }
                bfEncrypt::reply('success', $msg);
            }
            $msg->result = 'success';
            if ($internal === TRUE) {
                return $msg;
            }
            bfEncrypt::reply('success', $msg);
        } catch (Exception $e) {

            bfEncrypt::reply('error', 'exception: ' . $e->getMessage());
        }
    }

    /**
     *
     */
    private function getUpdatesCount()
    {
        require 'bfUpdates.php';

        $bfUpdates = new bfUpdates ();

        bfEncrypt::reply('success', array(
            'count' => $bfUpdates->getupdates(TRUE)
        ));

    }

    /**
     *
     */
    private function getUpdatesDetail()
    {
        require 'bfUpdates.php';

        $bfUpdates = new bfUpdates ();
        $updates = $bfUpdates->getupdates();

        bfEncrypt::reply('success', array(
            'current_joomla_version' => JVERSION,
            'availableUpdates' => $updates['updates'],
            'updateSites' => $updates['sites']
        ));
    }

    /**
     * Fix Db Schema version in the db
     * @since 20130929
     */
    private function fixDbSchema()
    {
        require JPATH_ADMINISTRATOR . '/components/com_installer/models/database.php';
        $model = new InstallerModelDatabase();
        $model->fix();

        $changeSet = $model->getItems();
        bfEncrypt::reply('success', array(
            'latest' => $changeSet->getSchema(),
            'current' => $model->getSchemaVersion(),
            'schema_errors' => $model->getItems()->check()
        ));
    }

    /**
     * Return the DB schema
     * @since 20130929
     */
    private function getDbSchemaVersion()
    {
        require JPATH_ADMINISTRATOR . '/components/com_installer/models/database.php';
        $model = new InstallerModelDatabase();
        $changeSet = $model->getItems();
        bfEncrypt::reply('success', array(
            'latest' => $changeSet->getSchema(),
            'current' => $model->getSchemaVersion(),
            'schema_errors' => $model->getItems()
                ->check()
        ));
    }

    private function checkGoogleFile()
    {
        $found = FALSE;
        $files = scandir(JPATH_BASE);
        foreach ($files as $file) {
            if (preg_match('/google.*\.html/', $file)) {
                $found = TRUE;
            }
        }
        bfEncrypt::reply('success', array(
            'found' => $found
        ));
    }

    private function toggleOnline()
    {
        return $this->_setConfigParam('offline', $this->_dataObj->status, 'int');
    }

    /**
     * Generic function for updating the configuration.php file
     *
     * @param $param string
     * @param $value string|int
     */
    private function _setConfigParam($param, $value, $type = 'int')
    {
        // Require more complex methods for dealing with files
        require 'bfFilesystem.php';

        if ($type == 'int') {
            if ($value == "true") {
                $value = 1;
            } else if ($value == "false") {
                $value = 0;
            } else {
                $value = 0;
            }
        }

        $config = JFactory::getConfig();

        if (version_compare(JVERSION, '3.0', 'ge')) {
            $config->set($param, $value);
        } else {
            $config->setValue('config.' . $param, $value);
        }

        $newConfig = $config->toString('PHP', 'config', array(
            'class' => 'JConfig'
        ));

        /**
         * On some occasions, Joomla! 1.6+ ignores the configuration and
         * produces "class c". Let's fix this!
         */
        $newConfig = str_replace('class c {', 'class JConfig {', $newConfig);
        $newConfig = str_replace('namespace c;', '', $newConfig);

        // Set the correct location of the file
        $filename = JPATH_ROOT . DIRECTORY_SEPARATOR . 'configuration.php';

        // Try to write out the configuration.php
        $result = Bf_Filesystem::_write($filename, $newConfig);

        if ($result !== FALSE) {

            bfEncrypt::reply('success', array(
                $param => $value
            ));

        } else {

            bfEncrypt::reply(bfReply::ERROR, array(
                'msg' => 'Could Not Save Config value for ' . $param
            ));
        }
    }

    private function toggleCache()
    {
        return $this->_setConfigParam('caching', $this->_dataObj->status, 'int');
    }

    private function getOfflineStatus()
    {
        bfEncrypt::reply('success', array(
            'offline' => JFactory::getApplication()->getCfg('offline')
        ));
    }

    private function getCacheStatus()
    {
        bfEncrypt::reply('success', array(
            'caching' => JFactory::getApplication()->getCfg('caching')
        ));
    }


    private function doExtensionUpgrade()
    {
        ob_start();

        // Load up as much of Joomla as we need
        require 'bfExtensions.php';

        $app = JFactory::getApplication('Myjoomla');


        // init reply to myJoomla.com
        $result = array();
        $result['messages'] = array();

        // which row in the _updates table should we use
        $this->_db->setQuery('SELECT update_id from #__updates WHERE extension_id = "' . $this->_dataObj->eid . '"');
        $extension_row_id = $this->_db->loadResult();

        // Do the update
        $ext = new bfExtensions();
        $result['result'] = $ext->doUpdate($extension_row_id);

        // Grab any error messages

        $result['messages'] = $app->getMessageQueue();

        // translate messages
        $lang = JFactory::getLanguage();
        $lang->load('com_installer', JPATH_ADMINISTRATOR, 'en-GB', TRUE);
        $lang->load('lib_joomla', JPATH_ADMINISTRATOR, 'en-GB', TRUE);

        if (count($result['messages'])) {
            foreach ($result['messages'] as &$msg) {
                $msg['message'] = JText::_($msg['message']);
            }
        }

        bfEncrypt::reply('success', array(
            'result' => $result
        ));
    }

    private function checkAkeebaOutputDirectory()
    {
        try {

            // If using PHP 5.2 then ABORT as Akeeba stuff needs newer PHP version
            if (version_compare(PHP_VERSION, '5.3.0', '<')) {
                throw new Exception('PHP version below 5.3.0 so Akeeba Will Not Work!');
            } else {
                require 'bfPHPFiveThreePlusOnly.php';
            }

            // Check Akeeba Installed - Prerequisite
            if (!file_exists(JPATH_SITE . '/libraries/f0f/include.php')
                || !file_exists(JPATH_SITE . '/administrator/components/com_akeeba/engine/Factory.php')
                || !file_exists(JPATH_SITE . '/administrator/components/com_akeeba/engine/serverkey.php')
            ) {
                bfEncrypt::reply('success', array(
                    'paths' => array()
                ));
            }

            $returnData = array();

            if (!defined('AKEEBAENGINE')) {
                define('AKEEBAENGINE', 1);
            }

            require_once JPATH_SITE . '/libraries/f0f/include.php';
            require_once JPATH_SITE . '/administrator/components/com_akeeba/engine/Factory.php';

            $serverKeyFile = JPATH_BASE . '/administrator/components/com_akeeba/engine/serverkey.php';
            if (!defined('AKEEBA_SERVERKEY') && file_exists($serverKeyFile)) {
                include $serverKeyFile;
            }

            // Get the list of profiles
            $profileList = F0FModel::getTmpInstance('Profiles', 'AkeebaModel')->getProfilesList();

            // for each profile
            foreach ($profileList as $config) {

                // if encrypted
                if (substr($config->configuration, 0, 12) == '###AES128###') {

                    $php53 = new bfPHPFiveThreePlusOnly();

                    $config->configuration = $php53->getAkeebaConfig($config->configuration);

                }

                // Convert ini to useable array
                $data = parse_ini_string($config->configuration, TRUE);

                // find the folder
                $dir = $data['akeeba']['basic.output_directory'];

                $returnData[] = array('path' => $dir,
                    'is_writable' => is_writable($dir),
                    'file_exists' => file_exists($dir));
            }

            bfEncrypt::reply('success', array(
                'paths' => $returnData
            ));

        } catch (Exception $e) {

            bfEncrypt::reply('error', array(
                'msg' => $e->getMessage()
            ));

        }
    }
}

// init this class
$securityController = new bfTools ($dataObj);

// Run the tool method
$securityController->run();
