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

if (!defined('_BF_AUDIT')) {

    if (!defined('_JEXEC')) {
        define("_JEXEC", 1);
    }
    define("_BF_AUDIT", 1);

    // We need this
    if (!defined('DS')) {
        define('DS', DIRECTORY_SEPARATOR);
    }

    // find out where our base path is
    if (file_exists(dirname(__FILE__) . '/../../../configuration.php')) {
        define('JPATH_BASE', realpath(dirname(__FILE__) . '/../../../'));
    } else {
        define('JPATH_BASE', realpath(dirname(__FILE__) . '/../../../../'));
    }

    // Joomla requires this
    require_once JPATH_BASE . DS . 'includes' . DS . 'defines.php';
    require_once JPATH_BASE . DS . 'includes' . DS . 'framework.php';

    /**
     * Crazy - we need to override some methods of the app
     */
    require 'bfApplicationMyjoomla.php';

    // Joomla 3.0.0+
    if (class_exists('JApplicationCms')) {

        // Ensure Joomla then uses our Application so we can override methods
        JFactory::getApplication('myjoomla');
    } else {

        // Joomla 1.5.0 - 1.5.26
        // Joomla 2.5.0 - 2.5.28
        JFactory::getApplication('site');
    }

    // Yeah we need this as well for some reason :-(
    jimport('joomla.html.parameter');
}
