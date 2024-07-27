<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property user_utility $user_utility
 * @property input $input
 * @property session $session
 * @property User_model $UM
 * 
 */
class Splash extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Dashboard_model','DM');
        $this->load->model('User_model','UM');
       
    }
	
    public function index(){
        $this->load->view('home');
    }

	public function about(){
        $this->load->view('about');
	}

	public function contact(){
        $this->load->view('contact');
	}

	public function contact_form(){
	    $data['date']	=	date('d-m-Y');
		$data['name']	=	$this->input->post('name');
	    $data['email']	=	$this->input->post('email');
	    $data['number']	=	$this->input->post('number');
	    $data['msg']	=	$this->input->post('msg');
		$this->UM->contact_form_save($data);
		redirect('Splash/index');

	}
}
