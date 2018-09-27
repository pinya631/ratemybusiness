<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review_model extends CI_Model {
	
	var $reviews_data = array();

	public function __construct(){
		$this->load->database();
		$this->load->helper('date');
	}
	
	/* Insert review data for ratings and comment */
	private function insert_review() {
		$data = array(
			'review_rating' => $this->input->post('rating',TRUE),
			'review_comment' => $this->input->post('comment',TRUE), 
			'review_date_created' => date('Y-m-d H:i:s',now())
		);
		$this->db->insert('reviews', $data);
		$this->reviews_data['review_id'] = $this->db->insert_id();
	}

	/* Insert review data for reviewers personal information */
	private function insert_reviewer() {
		
		$data = array(
			'reviewer_firstname' => $this->input->post('firstname',TRUE),
			'reviewer_lastname' => $this->input->post('lastname',TRUE),
			'reviewer_email' => $this->input->post('email',TRUE)
		);
		
		$query = $this->db->get_where('reviewers', $data);
		
		if(!empty($query->result())){
			
			foreach ($query->result() as $row)
				{
					$this->reviews_data['reviewer_id'] = $row->reviewer_id;	
				}
		}else{
			$this->db->insert('reviewers', $data);
			$this->reviews_data['reviewer_id'] = $this->db->insert_id();		
		}
	}
	
	/* Creates a db relationship between the reviewers and their comments */
	private function insert_user_review($company_id) {
		$data = array(
			'rcr_company_id' => $company_id,
			'rcr_rev_id' => $this->reviews_data['review_id'],
			'rcr_reviewer_id' => $this->reviews_data['reviewer_id'],
		);
		
		$this->db->insert('ref_company_reviews', $data);
	}
	
	/* Register the contact */
	public function add_review($company_id = NULL){
		$this->insert_review();
		$this->insert_reviewer();
		$this->insert_user_review($company_id);
	}
	
	
	/* Returns the reviews for the company 
	Query: SELECT * FROM ref_company_reviews 
	INNER JOIN reviews ON ref_company_reviews.rcr_rev_id = reviews.review_id 
	INNER JOIN reviewers ON ref_company_reviews.rcr_reviewer_id = reviewers.reviewer_id 
	WHERE ref_company_reviews.rcr_company_id = "INSERT COMPANY ID HERE" 
	ORDER BY ref_company_reviews.rcr_id
	*/

	public function get_reviews($company_id){
		$this->db->select('*');
		$this->db->from('ref_company_reviews');
		$this->db->join('reviews', 'ref_company_reviews.rcr_rev_id = reviews.review_id');
		$this->db->join('reviewers', 'ref_company_reviews.rcr_reviewer_id = reviewers.reviewer_id');
		$this->db->where('ref_company_reviews.rcr_company_id', $company_id);
		$this->db->order_by('ref_company_reviews.rcr_id', 'ASC');
		$query = $this->db->get();
		return $query->result_array();
	}
	
}