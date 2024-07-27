<?
class User_model extends CI_Model {

	

	public function check_user_login($email,$password){
		return $this->db->where('email', $email)
						->where('password', $password)
						->get('user')
						->result_array();
	}

    public function check_admin_login($email,$password){
		return $this->db->where('email', $email)
						->where('password', $password)
						->get('admin')
						->result_array();
	}

    public function signup($data){
        $this->db->insert('user',$data);
    }

	public function Get_all_users(){
		return $this->db->get('user')->result_array();
	}

	public function Get_user($id){
		return $this->db->where('id',$id)->get('user')->result_array();
	}

	public function Get_admin($id){
		return $this->db->where('id',$id)->get('admin')->result_array();
	}
	public function user_editing($data,$id){
		$this->db->where('id',$id)
				->update('user',$data);
	}
	public function profile_editing($data,$id){
		$this->db->where('id',$id)
				->update('admin',$data);
	}

	public function user_delete($id){
		$this->db->where('id',$id)
				->delete('user');
	}

	public function contact_form_save($data){
        $this->db->insert('contact',$data);
	}

	
}
