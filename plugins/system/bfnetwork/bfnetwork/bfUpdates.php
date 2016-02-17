<?php
/**
 * @package Blue Flame Network (bfNetwork)
 * @copyright Copyright (C) 2011, 2012, 2013, 2014, 2015 Blue Flame IT Ltd. All rights reserved.
 * @license GNU General Public License version 3 or later
 * @link https://myJoomla.com/
 * @author Phil Taylor / Blue Flame IT Ltd.
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

/**
 * If we have got here then we have already passed through decrypting
 * the encrypted header and so we are sure we are now secure and no one
 * else cannot run the code below.
 */
final class bfUpdates
{

    /**
     * @param bool $returnCount
     *
     * @return bool|int|string
     */
    public function getUpdates($returnCount = FALSE)
    {
        // If Joomla 1.5 - No concept of updates
        if (!file_exists(JPATH_LIBRARIES . '/joomla/updater/updater.php')) {
            return FALSE;
        }

        // Joomla 1.7.x has to be a pain in the arse!
        if (!class_exists('JUpdater')) {
            require JPATH_LIBRARIES . '/joomla/updater/updater.php';
        }

        // Let Joomla to the caching of the latest version of updates available from vendors
        $updater = JUpdater::getInstance();
        $updater->findUpdates();

        // get the resultant list of updates available
        $db = JFactory::getDbo();
        $db->setQuery('SELECT * from #__updates');
        $updates = $db->LoadObjectList();

        // reformat into a useable array with the extension_id as the array key
        $extensionUpdatesAvailable = array();
        foreach ($updates as $update) {
            $extensionUpdatesAvailable[$update->extension_id] = $update;
        }

        // get all the installed extensions from the site
        $db->setQuery('SELECT * from #__extensions');
        $items = $db->LoadObjectList();

        // init what we will return, a neat and tidy array
        $updatesAvailable = array();

        // for all installed items...
        foreach ($items as $item) {

            // merge by inject all known info into this item
            foreach ($extensionUpdatesAvailable[$item->extension_id] as $k => $v) {
                $item->$k = $v;
            }

            // Crappy Joomla
            $item->current_version = array_key_exists(@$item->extension_id, @$extensionUpdatesAvailable) ? @$extensionUpdatesAvailable[@$item->extension_id]->version : @$item->version;

            // if there is a newer version we want that!
            if ($item->current_version !== NULL) {

                // compose a nice new class, doesnt matter as we are json_encoding later anyway
                $i = new stdClass();
                $i->name = $item->name;
                $i->eid = $item->extension_id;
                $i->current_version = $item->current_version;
                $i->infourl = $item->infourl;

                // inject to our array we will return
                $updatesAvailable[] = $i;
            }

        }

        // Harvest update sites for better features in the future
        $db->setQuery('SELECT * from #__update_sites');
        $updateSites = $db->LoadObjectList();

        // if we are in bfAuditor then we want just a count of the items or the actual items?
        if (FALSE === $returnCount) {

            $data = array();
            $data['updates'] = $updatesAvailable;
            $data['sites'] = json_encode($updateSites);

            return $data;
        } else {
            return count($updatesAvailable);
        }
    }
}
