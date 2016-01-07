<?php 
    $xhtml = "Thông tin đang được cập nhật";
    if(!empty($items)){
         $xhtml = "";
        foreach($items as $item){

            $id         = $item['id'];
            $name       = $item['name'];
            $created    = date("Y-m-d H:i:s",strtotime($item['created']));
            $created_by = $item['created_by'];
            $status     = ($item['status']==1)? "success":"default";
            $ordering   = $item['ordering'];

            $xhtml .= '<tr class="pointer odd">
                                <td class="a-center">
                                    <div class="icheckbox_flat-green">
                                        <input type="checkbox" class="tableflat">
                                    </div>
                                </td>
                                <td class=" sorting_1">'.$name.'</td>
                                <td>'.$created.'</td>
                                <td>'.$created_by.'</td>
                                <td>
                                    <a href="#" class="label label-'.$status.'">
                                    <i class="fa fa-check"></i></a>
                                </td>
                                <td><input type="text" name="ordering[]" class="input-order" size="4" value="'.$ordering.'"></td>
                                <td >'.$id.'</td>
                                <td><a href="#">Edit</a>
                                </td>
                            </tr>';
        }
    } 
    // PAGINATION INFO
    $info_page['start'] = $info_page['start'] + 1;
    $xhtml_info_page = sprintf('<div class="dataTables_info">Showing %s to %s of %s entries</div>',$info_page['start'],$info_page['toItem'],$info_page['totalRows']);
    if($info_page['toItem'] > $info_page['totalRows']){
         $xhtml_info_page = sprintf('<div class="dataTables_info">Showing %s of %s entries</div>',$info_page['totalRows'],$info_page['totalRows']);
    }
    $linkSubmit = base_url().$module."/".$controller."/filter";

?>
<div class="row">
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
<form action="<?php echo $linkSubmit ?>" method="post" name="adminForm" id="adminForm">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
                <div class="dataTables_wrapper" role="grid">
                    <div class="dataTables_filter">
                        <label>Search all columns: <input type="text"></label>
                    </div>
                     <div id="status" class="dataTables_length">
                        <label>Show 
                        <?php
                            $content = array(
                                            "0"        =>"-- Select status --",
                                            "active"   =>"Active",
                                            "inactive" =>"InActive",
                                        ) ;
                             
                            echo selectBox($content,$filter["status"]);
                        ?>
                         status</label>
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
                                <th class="sorting_asc" style="width: 103px;" aria-sort="ascending" >Name </th>
                                <th class="sorting"  style="width: 243px;">Created </th>
                                <th class="sorting"  style="width: 124px;" >Created_by </th>
                                <th class="sorting"  style="width: 123px;" >Status </th>
                                <th class="sorting"  style="width: 68px;" >Ordering</th>
                                <th class="sorting"  style="width: 83px;" >ID</th>
                                <th class="no-link last sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 71px;" aria-label="Action
                                : activate to sort column ascending"><span class="nobr">Action</span>
                                </th></tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                                <?php echo $xhtml ?>
                        </tbody>
                    </table>
                    
                        <!--  PAGINATION  -->
                            <?php echo $xhtml_info_page.$link_page ?>
                  
                </div>
            </div>
    </div>
</form>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#status").change(function(){
            $("#adminForm").submit();
        })
    }) 

</script>>