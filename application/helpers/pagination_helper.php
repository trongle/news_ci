<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	if( !function_exists('configPagination')){
		function configPagination($url,$totalRows,$perPage){
			$config['base_url']       = base_url().$url;
			$config['total_rows']     = $totalRows;
			$config['per_page']       = $perPage;
			$config["uri_segment"]    = 4;
			$config['attributes']	  = array('class' => 'paginate_button');
			$config['full_tag_open']  = '<div class="dataTables_paginate paging_full_numbers">';
			$config['full_tag_close'] = '</div>';
			$config["next_link"]      = "Next";
			$config["prev_link"]      = "Previous";
			$config["last_link"]      = "Last";
			$config["first_link"]     = "First";	
			$config["cur_tag_open"]   = '<a class="paginate_active">';
			$config["cur_tag_close"]  = '</a>';
			return $config;
		}
	}
?>