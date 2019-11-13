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
    }
    function index(){
        $this->load->view('index');
    }
    function booking(){
        $this->load->view('booking');

    }
    function dashboard(){
        $this->load->view('dashboard');

    }
    function events(){
        $this->load->view('events');

    }
    function users(){
        $this->load->view('users');

    }
    
}