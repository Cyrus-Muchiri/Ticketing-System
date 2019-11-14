<?php
/**
 * Created by PhpStorm.
 *
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

/** @noinspection PhpIncludeInspection */

class Users extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('users_model');


	}

	function bookEvent()
	{
		$first_name = $this->input->post('firstname');
		$last_name = $this->input->post('lastname');
		$event_id = $this->input->post('event_ID');
		$email = $this->input->post('email');
		$ticket_count = $this->input->post('ticket_count');
		$ticket_type = $this->input->post('ticket_type');
		$number = $this->input->post('phonenumber');

		$event_name = $this->admin_model->eventDetails($event_id)->event_name;

		$data_db = array(
			'first_name' => $first_name,
			'last_name' => $last_name,
			'event_ID' => $event_id,
			'email' => $email,
			'phone_number' => $number,
			'ticket_type' => $ticket_type,
			'ticket_count'=>$ticket_count

	);
		$data_email = array(
			'first_name' => $first_name,
			'last_name' => $last_name,
			'event_ID' => $event_id,
			'email' => $email,
			'phone_number' => $number,
			'ticket_type' => $ticket_type,
			'event_name' => $event_name,
			'ticket_count'=>$ticket_count

		);
		//send mail

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.googlemail.com';
		$config['smtp_port'] = '465';
		$config['smtp_user'] = 'churchillaughindustry@gmail.com';
		$config['smtp_pass'] = 'Churchill1';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;

		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");

		$this->email->set_mailtype("html");
		$this->email->from('churchillaughindustry@gmail.com', 'Churchill');
		$this->email->to($email);
		$this->email->subject('Ticket Booking Confirmation');
		$body = $this->load->view('confirmationEmail', $data_email, TRUE); // to be provided
		$this->email->message($body);
		try{
			$this->email->send();

		}catch (Exception $e){
			print_r($e);
		}

		//decrement events
		$available_seats = $this->admin_model->eventDetails($event_id)->available_seats;
		$available_seats = $available_seats-$ticket_count;

		//update available seats
		$this->users_model->updateAvailableSeats($event_id,$available_seats);


		//insert to DB
		$this->users_model->insertBooking($data_db);

		$allEvents = $this->admin_model->allEvents();
		$data=array(
			'allEvents'=>$allEvents
		);
		$this->load->view('users',$data);
	}
}
