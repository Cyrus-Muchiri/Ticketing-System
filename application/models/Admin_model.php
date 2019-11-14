<?php

if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
		parent::__construct();
	}
	function addEvent($data){
		$status =$this->db->insert('events',$data);
		return $status;
	}
	function allEvents(){
		$this->db->select('*');
		$this->db->from('events');
		$events = $this->db->get()->result();
		return $events;
	}
	function removeEvent($eventID){
		$this->db->where('index_ID', $eventID);
		$this->db->delete('events');
	}
	function eventDetails($event_ID){
		$this->db->select('*');
		$this->db->from('events');
		$this->db->where('index_ID',$event_ID);

		$eventDetails = $this->db->get()->row();
		return $eventDetails;
	}

}
