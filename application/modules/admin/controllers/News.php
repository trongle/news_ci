<?php 

class News extends AdminController
{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->_data["loadPage"] = "index/index.php";
		$this->_data["title"]    = "NewsAround";	
		$this->load->view($this->_data["layout"],$this->_data);	
	}

	
}
?>