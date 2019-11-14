<?php
/**
 * Created by PhpStorm.
 *
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

/** @noinspection PhpIncludeInspection */

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	function addEvent()
	{
		$event_name = $this->input->post('event_name');
		$location = $this->input->post('location');
		$attendees = $this->input->post('attendees');
		$vipTicketPrice = $this->input->post('ticket_vip');
		$regulatTicketPrice = $this->input->post('ticket_regular');
		$date = $this->input->post('date');

		$data = array(
			'event_name' => $event_name,
			'location' => $location,
			'attendees' => $attendees,
			'vipTicketPrice' => $vipTicketPrice,
			'regularTicketPrice' => $regulatTicketPrice,
			'date' => $date
		);
		$this->admin_model->addEvent($data);
		$allEvents = $this->admin_model->allEvents();
		$data = array(
			'allEvents' => $allEvents
		);
		$this->load->view('events', $data);
	}

	function removeEvent($eventID)
	{
		$this->admin_model->removeEvent($eventID);
		$allEvents = $this->admin_model->allEvents();
		$data = array(
			'allEvents' => $allEvents
		);
		$this->load->view('events', $data);
	}
}
