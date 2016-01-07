<?php 
$arrContent = array(
	array("name" =>"Home",  	"icon"=>"fa-home",       "link"=>base_url("admin/index/index"),"list-child"=> null,"type"=>"admin-index"),
	array("name" =>"Group", 	"icon"=>"fa-desktop",    "link"=>base_url("admin/group/index"),"list-child"=> null,"type"=>"admin-group"),
	array("name" =>"User",  	"icon"=>"fa-desktop",    "link"=>base_url("admin/user/index"),"list-child"=> null,"type"=>"admin-user"),
	array("name"=>"Categories",	"icon"=>"fa-desktop",	 "link"=>"#","list-child"=>array(
		array("link" => base_url("admin/category/index"),"name" => "Bóng đá","type"=>"category-bongda"),
		array("link" => base_url("admin/category/index"),"name" => "Xã hội","type" =>"category-xahoi"),
		array("link" => base_url("admin/category/index"),"name" => "Âm nhạc","type"=>"category-amnhac"),
	),"type"=>"admin-category"),
	array("name"=>"News",		"icon"=>"fa-desktop",	  "link"=>base_url("admin/news/index"),"list-child"=> null,"type"=>"admin-news"),
)
?>
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
		<div class="navbar nav_title" style="border: 0;">
		    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
		</div>
		<div class="clearfix"></div>

		<!-- menu prile quick info -->
		<div class="profile">
		    <div class="profile_pic">
		        <img src="<?php echo base_url().ADMIN_IMG ?>img.jpg" alt="..." class="img-circle profile_img">
		    </div>
		    <div class="profile_info">
		        <span>Welcome,</span>
		        <h2>Anthony Fernando</h2>
		    </div>
		</div>
		<!-- /menu prile quick info -->
		<br />

		<!-- sidebar menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

		    <div class="menu_section">
		        <h3>General</h3>
		        <ul class="nav side-menu">
		             <?php 
			            foreach($arrContent as $content){
			            	echo linkSideBar($content["name"],$content["icon"],$content["link"],$content["list-child"],$content["type"]);
			            }
		            ?>
		            
		        </ul>
		    </div>
		</div>
		 <!-- /sidebar menu -->
	</div>
</div>
