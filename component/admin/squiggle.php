<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_squiggle
 *
 * @copyright   Copyright (C) 2021 Alison Keen
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');


// Get an instance of the controller prefixed by HelloWorld
$controller = JControllerLegacy::getInstance('Squiggle');

// Perform the Request task
$controller->execute(JFactory::getApplication()->input->get('task'));

// Redirect if set by the controller
$controller->redirect();

?>