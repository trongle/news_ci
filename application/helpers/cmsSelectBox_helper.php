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
	
	if( !function_exists('cmsLinkSort')){
		function cmsLinkSort($name,$order,$column,$options = null ){
			$class = empty($order['sort_type'])? "" : "_".$order['sort_type'];
			if($order['sort_column'] == $column){
				echo "SDfsdg";
				$xhtml = sprintf('<th class ="sorting%s"  style="%s"   onclick="changeLinkSort(\'%s\',\'%s\')">%s </th>',
							$class,$options['style'],$order['sort_type'],$column,$name);
			}else{
				$xhtml = sprintf('<th class ="sorting"  style="%s"  onclick="changeLinkSort(\'%s\',\'%s\')">%s </th>',
							$options['style'],$order['sort_type'],$column,$name);
			}
			return $xhtml;
		}
	}
?>