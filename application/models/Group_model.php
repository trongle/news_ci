<?php 
class Group_model extends CI_Model{
	protected $_table = "groups";
	public function __construct(){
		parent::__construct();
	}

	public function listItem($limit,$start,$options = null){
		if(!empty($options['filter_status'])){
			$status = ($options['filter_status']=="active")? 1:0;
			$this->db->where("status",$status);
		}
		$this->db->limit($limit,$start);
		return $this->db->get($this->_table)->result_array();
	}

	public function countItem($options = null){
		if(!empty($options['filter_status'])){
			$status = ($options['filter_status']=="active")? 1:0;
			$this->db->where("status",$status);
		}
		return $this->db->count_all_results($this->_table);
	}
}
?>