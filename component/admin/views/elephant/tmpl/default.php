<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * @package     Joomla.Administrator
 * @subpackage  com_squiggle
 *
 * @copyright   (C) 2021 - Alison Keen 
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 *
 * THIS CODE IS TOTALLY BROKEN and needs rewriting, 
 * i obviously started it and just haven't come back to it yet
 * 
 * Quick overview to jog my memory:
 * 1, read the likely variables from last time we submitted the form
 * 2, check for values we need to feed back to database, put into DB
 * 3, then read new status from database and display
 */



JViewLegacy::loadHelper('squigglehelper');

//we need this if we want to read input data 
// $jinput = JFactory::getApplication()->input;

$db = SquiggleHelper::getDB();

?>

<h3> Squiggle view </h3> 

<p> Obviously, 'squiggle' and 'elephant' are just random words.</p> 
<p> They were chosen to make it really clear that they aren't pre-set keywords, and also what is the name of the component ('squiggle') vs what is the name of the view ('elephant'). </p> 

<h4> Basic code structure </h4> 

<p> The metadata for the component goes into componentname.xml in the root 'component' folder. </p> 

<p> The rest of the description will have to wait for later... </p> 

<?php 

// This isn't working yet because the table creation screwed up on me for some reason.
// Probably a syntax error in the SQL file... oops 
// $squiggle_data = SquiggleHelper::getData($db); 

?>

