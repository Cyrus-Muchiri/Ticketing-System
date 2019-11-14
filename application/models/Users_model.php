<?php

if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class Users_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	function updateAvailableSeats($event_id,$available_seats){
		$data = array(
			'available_seats' => $available_seats
		);
		$this->db->where('index_ID', $event_id);

		$this->db->update('events', $data);
	}
	function insertBooking($booking){
		$this->db->insert('bookings',$booking);
	}


}
