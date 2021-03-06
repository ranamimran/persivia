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

/**
 * @package    AkeebaCMSUpdate
 * @copyright  Copyright (c)2010-2014 Nicholas K. Dionysopoulos
 * @license    GNU General Public License version 3, or later
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
interface AcuDownloadInterface
{
    /**
     * Does this download adapter support downloading files in chunks?
     *
     * @return  boolean  True if chunk download is supported
     */
    public function supportsChunkDownload();

    /**
     * Does this download adapter support reading the size of a remote file?
     *
     * @return  boolean  True if remote file size determination is supported
     */
    public function supportsFileSize();

    /**
     * Is this download class supported in the current server environment?
     *
     * @return  boolean  True if this server environment supports this download class
     */
    public function isSupported();

    /**
     * Get the priority of this adapter. If multiple download adapters are
     * supported on a site, the one with the highest priority will be
     * used.
     *
     * @return  boolean
     */
    public function getPriority();

    /**
     * Returns the name of this download adapter in use
     *
     * @return  string
     */
    public function getName();

    /**
     * Download a part (or the whole) of a remote URL and return the downloaded
     * data. You are supposed to check the size of the returned data. If it's
     * smaller than what you expected you've reached end of file. If it's empty
     * you have tried reading past EOF. If it's larger than what you expected
     * the server doesn't support chunk downloads.
     *
     * If this class' supportsChunkDownload returns false you should assume
     * that the $from and $to parameters will be ignored.
     *
     * @param   string  $url  The remote file's URL
     * @param   integer $from Byte range to start downloading from. Use null for start of file.
     * @param   integer $to   Byte range to stop downloading. Use null to download the entire file ($from is ignored)
     *
     * @return  string  The raw file data retrieved from the remote URL.
     *
     * @throws  Exception  A generic exception is thrown on error
     */
    public function downloadAndReturn($url, $from = NULL, $to = NULL);

    /**
     * Get the size of a remote file in bytes
     *
     * @param   string $url The remote file's URL
     *
     * @return  integer  The file size, or -1 if the remote server doesn't support this feature
     */
    public function getFileSize($url);
}
