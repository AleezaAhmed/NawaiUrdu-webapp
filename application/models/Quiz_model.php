<?php

class Quiz_model extends CI_Model {

	public function Get_quizes(){
		return $this->db->get('quiz')->result_array();
	}
	public function Get_quiz_questions($id){
		return $this->db->select('*')
						->from('quiz_questions')
						->where('quiz_id',$id)
						->get()
						->result_array();
	}

	public function Get_quiz_options($question_ids) {
        $this->db->where_in('quiz_question_id', $question_ids);
        $query = $this->db->get('quiz_options');
        return $query->result_array();
    }

	public function update_quiz_question($quiz_id, $data) {
        $this->db->where('id', $quiz_id);
        $this->db->update('quiz_questions', $data);
    }

    public function update_quiz_option($option_id, $data) {
        $this->db->where('id', $option_id);
        $this->db->update('quiz_options', $data);
    }
}
