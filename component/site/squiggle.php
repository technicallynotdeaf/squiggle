<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_squiggle
 *
 * @author      Spliced together in 2021 by github/technicallynotdeaf 
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Get an instance of the controller prefixed by HelloWorld
$controller = JControllerLegacy::getInstance('Squiggle');

// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
