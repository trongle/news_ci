<?php 
class Group_model extends CI_Model{
	protected $_table = "groups";
	public function __construct(){
		parent::__construct();
	}

	public function listItem($limit,$start,$options = null){
		$filter_sort_column = empty($options['filter_sort_column'])? "id" : $options['filter_sort_column'];
		$filter_sort_type   = empty($options['filter_sort_type'])? "id" : $options['filter_sort_type'];

		if(!empty($options['filter_status'])){
			$status = ($options['filter_status']=="active")? 1:0;
			$this->db->where("status",$status);
		}
		if(!empty($options['filter_search'])){
			$search_words = $options['filter_search'];
			$this->db->like("name",$search_words);
			$this->db->or_where("id",$search_words);
		}
		$this->db->limit($limit,$start);
		$this->db->order_by($options['filter_sort_column'], $options['filter_sort_type']);
		return $this->db->get($this->_table)->result_array();
	}

	public function countItem($options = null){
		if(!empty($options['filter_status'])){
			$status = ($options['filter_status']=="active")? 1:0;
			$this->db->where("status",$status);
		}
		if(!empty($options['filter_search'])){
			$search_words = $options['filter_search'];
			$this->db->like("name",$search_words);
			$this->db->or_where("id",$search_words);
		}
		return $this->db->count_all_results($this->_table);
	}
}
?>