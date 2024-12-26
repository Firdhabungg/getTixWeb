<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Event_model', 'event');
    }
    public function index(){
        $data['title'] = 'Event';
        $this->event->getAllEvent();
    }
}