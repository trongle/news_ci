<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin - Gentelella</title>

    <?php  include_once "html/style.php"; ?>
</head>

<body class="nav-md">

    <div class="container body">
        <div class="main_container">
           <?php 
                require_once "html/sidebar.php";
                require_once "html/top_nav.php";
           ?>
<!-- page content -->
<div class="right_col" role="main">
    <div>
        <?php require_once "html/breadcrum.php"; ?>
    </div>
    <!-- top tiles -->
    <!-- BUTTON -->
    <div class="text-center x_content">
        <a class="btn btn-app"><i class="fa fa-edit"></i> Edit </a>
        <a class="btn btn-app"><i class="fa fa-users"></i> Users</a>
        <a class="btn btn-app"><i class="fa fa-play"></i> Publish</a>
        <a class="btn btn-app"><i class="fa fa-stop"></i> Unpublish</a>
        <a class="btn btn-app"><i class="fa fa-minus-circle"></i> Delete</a>
        <a class="btn btn-app"><i class="fa fa-repeat"></i> Refresh </a>
    </div>
    <!-- MESSAGE -->
    <div class="x_content">
        <div class="alert alert-warning alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
        </div>
    </div>
    <!-- TABLE -->
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
                <div class="dataTables_wrapper" role="grid">
                    <div id="example_length" class="dataTables_length">
                        <label>Show <select size="1" style="width: 56px;padding: 6px;" name="example_length" aria-controls="example">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> entries</label>
                    </div>
                    <div class="dataTables_filter" id="example_filter">
                        <label>Search all columns: <input type="text"></label>
                    </div>
                    <table id="example" class="table table-striped jambo_table">
                        <thead>
                            <tr class="headings" role="row">
                               <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 41px;" aria-label="">
                                    <div class="icheckbox_flat-green" style="position: relative;">
                                        <input type="checkbox" id="checkall">
                                        <ins class="iCheck-helper" ></ins>
                                    </div>
                                </th>
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 103px;" aria-sort="ascending" aria-label="Invoice : activate to sort column descending">Invoice </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 243px;" aria-label="Invoice Date : activate to sort column ascending">Invoice Date </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 124px;" aria-label="Order : activate to sort column ascending">Order </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 123px;" aria-label="Bill to Name : activate to sort column ascending">Bill to Name </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 68px;" aria-label="Status : activate to sort column ascending">Status </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 83px;" aria-label="Amount : activate to sort column ascending">Amount </th>
                                <th class="no-link last sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 71px;" aria-label="Action
                                : activate to sort column ascending"><span class="nobr">Action</span>
                                </th></tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                                <tr class="pointer odd">
                                    <td class="a-center">
                                        <div class="icheckbox_flat-green">
                                            <input type="checkbox" class="tableflat">
                                        </div>
                                    </td>
                                    <td class=" sorting_1">121000037</td>
                                    <td class="">May 26, 2014 10:52:44 PM</td>
                                    <td class=" ">121000204</td>
                                    <td class=" ">Mike Smith</td>
                                    <td class=" ">Paid</td>
                                    <td class="a-right a-right  ">$333.21</td>
                                    <td class=" last "><a href="#">View</a>
                                    </td>
                                </tr>
                                <tr class="pointer even">
                                    <td class="a-center">
                                        <div class="icheckbox_flat-green">
                                            <input type="checkbox" class="tableflat" >
                                        </div>
                                    </td>
                                    <td class=" sorting_1">121000037</td>
                                    <td class="">May 26, 2014 10:52:44 PM</td>
                                    <td class=" ">121000204</td>
                                    <td class=" ">Mike Smith</td>
                                    <td class=" ">Paid</td>
                                    <td class="a-right a-right  ">$333.21</td>
                                    <td class=" last "><a href="#">View</a>
                                    </td>
                                </tr>
                                <tr class="pointer odd">
                                    <td class="a-center">
                                        <div class="icheckbox_flat-green" style="position: relative;">
                                            <input type="checkbox" class="tableflat" >
                                        </div>
                                    </td>
                                    <td class=" sorting_1">121000037</td>
                                    <td class="">May 26, 2014 10:52:44 PM</td>
                                    <td class=" ">121000204</td>
                                    <td class=" ">Mike Smith</td>
                                    <td class=" ">Paid</td>
                                    <td class="a-right a-right  ">$333.21</td>
                                    <td class=" last "><a href="#">View</a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                    <div class="dataTables_info" id="example_info">Showing 1 to 12 of 40 entries</div>
                    <div class="dataTables_paginate paging_full_numbers" id="example_paginate">
                        <a tabindex="0" class="first paginate_button paginate_button_disabled" id="example_first">First</a>
                        <a tabindex="0" class="previous paginate_button paginate_button_disabled" id="example_previous">Previous</a>
                        <span><a tabindex="0" class="paginate_active">1</a>
                        <a tabindex="0" class="paginate_button">2</a>
                        <a tabindex="0" class="paginate_button">3</a><a tabindex="0" class="paginate_button">4</a></span>
                        <a tabindex="0" class="next paginate_button" id="example_next">Next</a>
                        <a tabindex="0" class="last paginate_button" id="example_last">Last</a>
                    </div>
                </div>
            </div>
    </div>
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
    include_once "html/script.php";
?>
    <script>
        $(document).ready(function(){
           $("#checkall").change(function(){
                $(":checkbox").prop("checked",$(this).prop("checked"));
            })
        })
    </script>
</body>

</html>
