<?php 
class AdminController extends MY_Controller
{
	protected $_data;
	public function __construct(){
		
		parent::__construct();
		$this->_data['module']     =  strtolower($this->uri->segment(1,"index"));
		$this->_data['controller'] =  strtolower($this->uri->segment(2,"index"));
		$this->_data['action']     =  strtolower($module = $this->uri->segment(3,"index"));
		$this->_data['layout']     =  $this->_data["module"]."/main";
		$this->load->helper("makeLinkContent_helper");
	}
}
?>