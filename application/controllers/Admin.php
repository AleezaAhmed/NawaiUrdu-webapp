<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property user_utility $user_utility
 * @property input $input
 * @property session $session
 * @property User_model $UM
 * @property Quiz_model $QM
 * 
 */
class Admin extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Dashboard_model','DM');
        $this->load->model('User_model','UM');
        $this->load->model('Quiz_model','QM');
       
    }
	public function index()
	{
		$this->check_login();
		$this->load->view('admin/dashboard');
	}

    public function loging_in(){
		$email  	=   $this->input->post('email');
	    $password   =   $this->input->post('password');
	    $data 		= 	$this->UM->check_admin_login($email,$password);
	    if ($data!='' && !empty($data)){
	    	$sess_data = array(
                            'id'    => $data[0]['id'],
	    					'username'  => $data[0]['name'],
	    					'image'  => $data[0]['image']
                        );
	    	$this->session->set_userdata($sess_data);
	    	$this->session->set_flashdata('good', 'good');
	    	redirect('admin/index');
	    }else{
	    	$this->session->set_flashdata('error', 'error');
	    	redirect('Admin/login');
	    }
		
	}

    public function login(){
		$this->load->view('admin/login');
	}
    public function check_login()
    {
        if (!isset($_SESSION['id'])) {
            redirect('Admin/login');
        }
    }

    //session distory
	public function logout(){
		$this->session->sess_destroy();
		redirect('Admin/login');
	}

	public function users(){
		$data['users'] = $this->UM->Get_all_users();
		$this->load->view('admin/users',$data);
	}

	public function user_edit($id){
		$data['users'] = $this->UM->Get_user($id);
		$this->load->view('admin/user_edit',$data);
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
		redirect('Admin');
	}
	public function profile($id){
		$data['admin'] = $this->UM->Get_admin($id);
		$this->load->view('admin/profile',$data);
	}
	public function profile_editing($id) {
		$data = $this->input->post();
		$image = $_FILES['image']['name'];
		$upload_folder = './assets/images/uploaded_files/admin/'.$id.'/';
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
		$this->UM->profile_editing($data, $id);
		$this->session->set_flashdata('edit', 'edit');
		redirect('Admin');
	}

	public function user_delete($id){
		$this->UM->user_delete($id);
		$this->session->set_flashdata('delete', 'delete');
		redirect('Admin/users');
	}

	public function quiz(){
		$data['quizs'] = $this->QM->Get_quizes();
		$this->load->view('admin/quizes',$data);
	}

	public function quiz_edit($id){
		$data['quizs'] = $this->QM->Get_quiz_questions($id);

		 // Extract quiz question IDs
		 $question_ids = array_column($data['quizs'], 'id');

		 if (!empty($question_ids)) {
			 // Get quiz options
			 $quiz_options = $this->QM->Get_quiz_options($question_ids);
 
			 // Merge quiz options with their respective questions
			 foreach ($data['quizs'] as &$question) {
				 $question['options'] = array_filter($quiz_options, function($option) use ($question) {
					 return $option['quiz_question_id'] == $question['id'];
				 });
			 }
		 }

		$data['quiz_id'] = $id;


		$this->load->view('admin/edit_quiz',$data);
	}

	public function save_quiz() {
        // Load the model
        $this->load->model('Quiz_model', 'QM');

        // Retrieve form data
        $quiz_ids = $this->input->post('quiz_id');
        $questions = $this->input->post('question');
        $answers = $this->input->post('answer');
        $option_texts = $this->input->post('option_text');
        $option_ids = $this->input->post('option_id');

        foreach ($quiz_ids as $index => $quiz_id) {
            // Update quiz question
            $data = array(
                'question' => $questions[$index],
                'answer' => isset($answers[$index]) ? $answers[$index] : null
            );
            $this->QM->update_quiz_question($quiz_id, $data);

            // Update quiz options
            foreach ($option_ids[$index] as $optIndex => $option_id) {
                $data = array(
                    'quiz_option' => $option_texts[$index][$optIndex]
                );
                $this->QM->update_quiz_option($option_id, $data);
            }
        }

        // Redirect or load a success view
        redirect('Admin/quiz');
    }
}
