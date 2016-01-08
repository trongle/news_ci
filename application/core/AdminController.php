<?php 
class AdminController extends MY_Controller
{
	protected $_data;
	public function __construct(){	
		parent::__construct();
		$this->_data['module'] 	   =  strtolower($this->router->fetch_module());
		$this->_data['controller'] =  strtolower($this->router->fetch_class());
		$this->_data['action']     =  strtolower($this->router->fetch_method());
		$this->_data['layout']     =  $this->_data["module"]."/main";
		$this->load->helper("makeLinkContent_helper");
	}
}
?>