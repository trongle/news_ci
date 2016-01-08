<?php

class Group extends AdminController
{
	public function __construct(){
		parent::__construct();
		$this->load->model("Group_model");
		$this->load->library('pagination');
		$this->load->helper(array("pagination_helper","cmsSelectBox_helper","form"));
	}
	public function index(){
		$this->_data["loadPage"]  = "group/index.php";
		$this->_data["title"]     = "NewsAround";
		$options = array();
		// $this->session->sess_destroy();
		// echo  $this->session->filter_sort_type;
		$options['filter_status']      = $this->session->filter_status;
		$options['filter_search']      = $this->session->filter_search;
		$options['filter_sort_type']   = ($this->session->filter_sort_type == "")? "asc" : $this->session->filter_sort_type;
		$options['filter_sort_column'] = ($this->session->filter_sort_column == "")? "id" : $this->session->filter_sort_column;
		$totalRows                = $this->Group_model->countItem($options);
		$config                   = configPagination("admin/group/index",$totalRows,4);	
		$start                    = $this->uri->segment(4);

		$this->pagination->initialize($config);
		$this->_data["link_page"] = $this->pagination->create_links();
		//list item
		$this->_data["items"]     = $this->Group_model->listItem($config['per_page'],$start,$options);

		//luu filter
		$this->_data["filter"]    = array(
			"status"       => $this->session->filter_status,
			"search_words" => $this->session->filter_search
		);
		$this->_data['order'] = array(
			"sort_type"   => $options['filter_sort_type'],
			"sort_column" => $options['filter_sort_column'],
		);

		//thông tin phân trang
		$this->_data["info_page"] = array(
			"totalRows" => $totalRows,
			"start"     => $start,
			"toItem"    => $start + $config["per_page"],
		);
		$this->load->view($this->_data["layout"],$this->_data);
	}

	public function filter(){
		if($this->input->post()){
			$this->session->set_userdata("filter_status",$this->input->post("filter_status")) ;
			$this->session->set_userdata("filter_search",$this->input->post("filter_search")) ;
			$this->session->set_userdata("filter_sort_type",$this->input->post("sort_type")) ;
			$this->session->set_userdata("filter_sort_column",$this->input->post("sort_column")) ;
		}
		if(!empty($this->input->post("clear"))){
			$this->session->unset_userdata("filter_search");
		}

		return redirect("admin/group/index");

	}


}
?>