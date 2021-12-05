<?php defined('_JEXEC') or die();
/**
 * @package     Joomla.Administrator
 * @subpackage  com_squiggle
 *
 * @author      Spliced together in 2021 by github/technicallynotdeaf 
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 */

abstract class SquiggleHelper
{

  /* Create the DB connection to the joomla database... */
  function getDB() {
   
     $db = JFactory::getDbo();
     
     return $db;

  }
  
  
  function getData($db) {
  
    $query = $db->getQuery(true);
    $query->select('*');
    $query->from('#__com_squiggle_data');

    // echo "\n<br/>Question Lookup Query: " . (string)$query;
    $db->setQuery((string)$query);
    
    $data_returned = $db->loadObjectList();
    
    return $data_returned;

  } 

  
  function addData($data, $db){
			
	// statement_id is a variable where the db engine dumps the 
	// returned key of the new object from the table
    $result = $db->insertObject('#__com_squiggle_data', $data, 'statement_id');	
		
    $statement_id = $statement_obj->row_id;		
     
  }
    
}
