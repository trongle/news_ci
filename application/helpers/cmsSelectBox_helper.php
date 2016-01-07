<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	if( !function_exists('selectBox')){
		function selectBox($content,$selected,$opions = null ){
			$select  = '<select name="filter_status" size="1" style="width: 150px;padding: 6px;">';
			foreach($content as $key => $value){
				if($key == $selected){
					$select .= sprintf('<option selected value="%s">%s</option>',$key,$value);
				}else{
					$select .= sprintf('<option  value="%s">%s</option>',$key,$value);
				}				
			}
            $select .='</select>';
			return $select;
		}
	}
?>