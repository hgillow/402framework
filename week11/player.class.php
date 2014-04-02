<?php
/**
 * employee.class.php - set and format various outputs for a user
 */
 
//require parent user class
require_once("user.class.php");
 
/*
 * employee class
 */ 
class Player extends User 
{
	protected $playerposition;
	
	//constructor
	function __construct($playername) {
		$this->set_name($playername);
	}
	
	//setter for new job title
	function set_position($playerposition) {
		$this->position = $playerposition;
	}
	
	//getter for job title
	function get_position() {
		return $this->position;
	}
	
	//setter for strikes
	function set_strikes($playerstrikes) {
		$this->strikes = $playerstrikes;
	}
	
	//getter for age
	function get_strikes() {
		return $this->strikes;
	}

}
?>