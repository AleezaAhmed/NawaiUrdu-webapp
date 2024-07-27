<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property input $input
 * @property session $session
 * @property User_model $UM
 * 
 */
class User extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Dashboard_model','DM');
        $this->load->model('User_model','UM');
    }
	public function index(){
		$this->check_login();
		$this->load->view('user/dashboard');
	}

	public function loging_in(){
		$email  	=   $this->input->post('email');
	    $password   =   $this->input->post('password');
	    $data 		= 	$this->UM->check_user_login($email,$password);
	    if ($data!='' && !empty($data)){
	    	$sess_data = array(
                            'id'    => $data[0]['id'],
	    					'username'  => $data[0]['f_name'].' '.$data[0]['l_name'],
	    					'image'  => $data[0]['image']
                        );
	    	$this->session->set_userdata($sess_data);
	    	$this->session->set_flashdata('good', 'good');
	    	redirect('User/index');
	    }else{
	    	$this->session->set_flashdata('error', 'error');
	    	redirect('User/login');
	    }
		
	}

	public function login(){
		$this->load->view('user/login');
	}

    public function check_login()
    {
        if (!isset($_SESSION['id'])) {
            redirect('User/login');
        }
    }
    //session distory
	public function logout(){
		$this->session->sess_destroy();
		redirect('User/login');
	}

    public function signup()
    {
		$this->load->view('user/signup');
    }

    public function signup_data(){
        $data = $this->input->post();
        $this->UM->signup($data);
        $this->session->set_flashdata('signup', 'signup');
        redirect('User/login');

    }

	public function level($level){
		if($level == 1){
			$this->load->view('user/levels/level1');
		}
		if($level == 2){
			$this->load->view('user/levels/level2');
		}
		if($level == 3){
			$this->load->view('user/levels/level3');
		}
	}

	public function profile($id){
		$data['user'] = $this->UM->get_user($id);
		$this->load->view('User/profile',$data);
	}

	public function user_editing($id) {
		$data = $this->input->post();
		$image = $_FILES['image']['name'];
		$upload_folder = './assets/images/uploaded_files/'.$id.'/';
		if (!file_exists($upload_folder)) {
	        mkdir($upload_folder, 0777, true);
	    }
		if(isset($image) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
			$ext = pathinfo($image, PATHINFO_EXTENSION);
			$rename = time().'.' . $ext;
			$image_tmp_name = $_FILES['image']['tmp_name'];
			$image_folder = $upload_folder . $rename;
	
			
			if (!move_uploaded_file($image_tmp_name, $image_folder)) {
				die('Failed to move file');
			}
	
			$data['image'] = $rename;
		} else {
			unset($data['image']);
		}
		$this->UM->user_editing($data, $id);
		$this->session->set_flashdata('edit', 'edit');
		redirect('User');
	}
	
}
