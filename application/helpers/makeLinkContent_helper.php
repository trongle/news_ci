<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	if( !function_exists('linkSideBar')){
		function linkSideBar($name,$icon,$link,$listChild,$type){
			$xhtml = sprintf('<li class="%s"><a href="%s"><i class="fa %s"></i>%s</a>',$type,$link,$icon,$name);
			if(!empty($listChild)){
				$xhtml .= '<ul class="nav child_menu" style="display: none">';
				foreach($listChild as $child){
					$xhtml .= sprintf('<li class="%s"><a href="%s">%s</a></li>',$child["type"],$child['link'],$child['name']);
				}
				$xhtml .= "</ul>";
			}
			$xhtml .= "</li>";
			return $xhtml;
		}
	}
?>