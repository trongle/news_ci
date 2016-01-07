<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title ?></title>
    <?php  $this->load->view("admin/html/style.php"); ?>
</head>

<body class="nav-md">

    <div class="container body">
        <div class="main_container">

           <?php 
                $this->load->view("admin/html/sidebar.php");
                $this->load->view("admin/html/top_nav.php");
           ?>
            <!-- page content -->
            <div class="right_col" role="main">
                <div>
                    <?php $this->load->view("admin/html/breadcrum.php"); ?>
                </div>
                <!-- top tiles -->
                    <?php $this->load->view($loadPage) ?>
                <!-- /top tiles -->
            </div>
            <!-- /page content -->
        </div>
    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>
<?php 
    $this->load->view("admin/html/script.php");
?>

</script>
</body>

</html>
