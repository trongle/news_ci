<?php

class Group extends AdminController
{
	public function __construct(){
		parent::__construct();
		$this->load->model("Group_model");
		$this->load->library('pagination');
	}
	public function index(){
		$this->_data["loadPage"]  = "group/index.php";
		$this->_data["title"]     = "NewsAround";
		$this->load->helper("pagination_helper");
		$this->load->helper("cmsSelectBox_helper");
		$options = array();
		$options['filter_status'] = $this->session->filter_status;

		$totalRows                = $this->Group_model->countItem($options);
		$config                   = configPagination("admin/group/index",$totalRows,4);	
		$start                    = $this->uri->segment(4);

		$this->pagination->initialize($config);
		$this->_data["link_page"] = $this->pagination->create_links();
		
		$this->_data["items"]     = $this->Group_model->listItem($config['per_page'],$start,$options);
		$this->_data["filter"] = array(
			"status" => $this->session->filter_status
		);
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
		}

		return redirect("admin/group/index");

	}


}
?>