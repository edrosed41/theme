<?php

class Upload extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url','form');
	}

	public function index(){
		$this->load->view('upload_view');
	}

}