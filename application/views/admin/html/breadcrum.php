<?php 
// header
	$h1 = ($controller == "index")? "Dashboard":"Manage ".$controller;
	$action = ($action == "index")? "List" : ucfirst($action);
	$header = sprintf('<h1>%s<small> %s</small></h1>',$h1,$action);

//breadcrum
	if($controller == "index") {
		$breadcum = '<li class="active"><i class="fa fa-dashboard"></i> Home</li><li class="active">Dashboard</li>';
	}else{
		$breadcum = '<li><a href="'.base_url("admin/index/index").'"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active">'."Manage ".$controller.'</li>
					<li class="active">'.$action.'</li>';
	}
?>
<section class="content-header">
      <?php echo $header ?>
      <ol class="breadcrumb">
        <!-- <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li> -->
        <?php echo $breadcum ?>
      </ol>
</section>





