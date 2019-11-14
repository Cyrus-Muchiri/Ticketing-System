<?php
/**
 * Created by PhpStorm.
 *
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

/** @noinspection PhpIncludeInspection */

class Users extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
	}
	function bookEvent(){
		$first_name =$this->input->post('first_name');
		$last_name =$this->input->post('last_name');
		$event_id=$this->input->post('event_id');
		$email=$this->input->post('email');
		$ticket_count=$this->input->post('ticket_count');
		$ticket_type=$this->input->post('ticket_tyoe');
		$number= $this->input->post('phonenumber');

		$data= array(
			'first_name' =>$first_name,
			'last_name'=>$last_name,
			'event_ID'=>$event_id,
			'email'=>$email,
			'number'=>$number,
			'ticket_type'=>$ticket_type


		);
	}
}
