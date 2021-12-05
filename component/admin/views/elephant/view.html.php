<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_squiggle
 *
 * @copyright   Copyright (C) 2021 Alison Keen
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * a HTML View class for the Squiggle Component
 * 
 * Generate new designs... 
 *
 */
class SquiggleViewElephant extends JViewLegacy
{
  /**
   * Display the Elephant view
   *
   * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
   *
   * @return  void
   */
  function display($tpl = null)
  {
    // Assign data to the view
    $this->msg = $this->get('Msg');

    // Check for errors.
    $errors = $this->get('Errors');

    if (null !== $errors)
    {
      if (count($errors = $this->get('Errors'))) {
        JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');

        return false;
      }
    }

    // Display the view
    parent::display($tpl);
  }
}

