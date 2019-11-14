<?php
/**
 * Created by PhpStorm.
 * 
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');
/** @noinspection PhpIncludeInspection */
class Ticketing extends CI_Controller{
    function __construct(){
        parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('users_model');

	}
    function index(){
        $this->load->view('index');
    }
    function booking($event_ID){
    	$eventDetails = $this->admin_model->eventDetails($event_ID);
		$data=array(
			'eventDetails'=>$eventDetails
		);
        $this->load->view('booking',$data);

    }
    function dashboard(){
        $this->load->view('dashboard');

    }
    function events(){
		$allEvents = $this->admin_model->allEvents();
		$data=array(
			'allEvents'=>$allEvents
		);

		$this->load->view('events',$data);

    }
    function users(){

		$allEvents = $this->admin_model->allEvents();
		$data=array(
			'allEvents'=>$allEvents
		);
        $this->load->view('users',$data);

    }
    function admin(){
		$this->load->view('admin');

	}
    
}
