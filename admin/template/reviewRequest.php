<?php
    include 'INCLUDES/userdetails.php';
    include 'INCLUDES/header.php';
    include 'INCLUDES/sidebar.php';
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Color Admin | Blank Page</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
    <link href="../assets/plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="../assets/css/material/style.min.css" rel="stylesheet" />
    <link href="../assets/css/material/style-responsive.min.css" rel="stylesheet" />
    <link href="../assets/css/material/theme/orange.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="../assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN RESPONSIVE TABLE STYLE ================== -->
    <link href="../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
    <!-- ================== END RESPONSIVE TABLE STYLE ================== -->
    <link href="../assets/js/sweetalert/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>
<body>
    <!-- begin #page-loader -->
    
    <!-- end #page-loader -->
    
    <!-- begin #page-container -->
    
        <!-- begin #header -->
        
        <!-- end #header -->
        
        <!-- begin #sidebar -->
        
                <!-- end sidebar nav -->
            </div>
            <!-- end sidebar scrollbar -->
        </div>
        <div class="sidebar-bg"></div>
        <!-- end #sidebar -->

        <!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Page Options</a></li>
                <li class="breadcrumb-item active">Blank Page</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Acquired Stocks<small></small></h1>
            <!-- end page-header -->
            <!-- end #header -->

            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Spare Parts Inventory</h4>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="form-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row group" style="margin-left: 10px">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label> Batch No:</label>
                                                <input type="text" id="batchno" value="9" class="form-control" readonly="" style="font-weight:bold; color:black"/>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Date Requested:</label>
                                                <input type="text" id="batchno" value="2019-04-12" class="form-control" readonly="" style="font-weight:bold; color:black"/>
                                            </div>
                                        </div>  
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Date Revised:</label>
                                                <input type="text" id="batchno" value="" class="form-control" readonly="" style="font-weight:bold; color:black"/>
                                            </div>
                                        </div> 
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Request Status:</label>
                                                <input type="text" id="batchno" value="PENDING/WAITING FOR APPROVAL" class="form-control" readonly="" style="background-color: #ffe100; color: black"/>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-md-12">
                                        <div style="padding: 1px; margin-bottom: 10px; background-color: #757575;">
                                    </div>
                                <label>Requsted Items</label>
                                <table id="data-table-buttons" class="table table-striped table-bordered">  
                                    <thead>
                                        <tr>
                                            <th width="1%"></th>
                                            <th width="1%" data-orderable="false"></th>
                                            <th class="text-nowrap">Stock Name</th>
                                            <th class="text-nowrap">Quantity</th>
                                            <th class="text-nowrap">Supplier</th>
                                            <th class="text-nowrap">Amount</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td width="1%" class="f-s-600 text-inverse">1</td>
                                            <td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
                                            <td>Freon 134A 13.5 kg/8</td>
                                            <td>3</td>
                                            <td>Tastic/Ronnie Metal Works</td>
                                            <td>12,000</td>
                                            <td><button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-success btn-sm"><i class="far fa-file-word"></i></button>
                                            </td>
                                        </tr>
                                    <!--<tbody><?php 
                                        $tablesql = "SELECT * from ROOM WHERE ROOM_STAT = 0 ORDER BY ROOM_ID DESC";
                                        $tableresult = mysqli_query($connect, $tablesql) or die("Bad query: $tablesql");
                                        $a = 0;
                                        while ($row = mysqli_fetch_assoc($tableresult)) {
                                            
                                            $a+=1;
                                            $ID = $row['ROOM_ID'];
                                            $fname = $row['ROOM_NAME'];
                                                    
                                     ?>
                                        <tr class="odd gradeX">
                                           <td><?php echo $a; ?></td>
                                           <td><?php echo $fname ?></td>
                                           <?php } ?>
                                        </tr>-->
                                        
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>                      
                    </form>
                        </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end #content -->
        
        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-cyan" data-theme="default" data-theme-file="../assets/css/material/theme/default.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default/Cyan" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="../assets/css/material/theme/blue.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="../assets/css/material/theme/purple.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="../assets/css/material/theme/orange.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="../assets/css/material/theme/red.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red" data-original-title="" title="">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="../assets/css/material/theme/black.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black" data-original-title="" title="">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Header Styling</div>
                    <div class="col-md-7">
                        <select name="header-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Header</div>
                    <div class="col-md-7">
                        <select name="header-fixed" class="form-control form-control-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                    <div class="col-md-7">
                        <select name="sidebar-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Sidebar</div>
                    <div class="col-md-7">
                        <select name="sidebar-fixed" class="form-control form-control-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                    <div class="col-md-7">
                        <select name="content-gradient" class="form-control form-control-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="javascript:;" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage">Reset Local Storage</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->
        
        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="material-icons">keyboard_arrow_up</i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="../assets/plugins/jquery/jquery-3.2.1.min.js"></script>
    <script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="../assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <!--[if lt IE 9]>
        <script src="../assets/crossbrowserjs/html5shiv.js"></script>
        <script src="../assets/crossbrowserjs/respond.min.js"></script>
        <script src="../assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/plugins/js-cookie/js.cookie.js"></script>
    <script src="../assets/js/theme/material.min.js"></script>
    <script src="../assets/js/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN RESPONSIVE TABLE JS ================== -->
    <script src="../assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
    <script src="../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/js/demo/table-manage-responsive.demo.min.js"></script>
    <!-- ================== END RESPONSIVE TABLE JS ================== -->
    <script src="../assets/js/sweetalert/sweetalert.min.js"></script>
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="../assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
    <script src="../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="../assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
    <script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script src="../assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js"></script>
    <script src="../assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js"></script>
    <script src="../assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
    <script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
    <script src="../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/js/demo/table-manage-buttons.demo.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
    
    <script type="text/javascript">
        $('#submit').click(function(e){
            e.preventDefault();

            var e = document.getElementById('bldg');
            var get = e.options[e.selectedIndex].value;
            var room = document.getElementById('room').value;
           // var mnameuser = document.getElementById('mname').value;
            //var lnameuser = document.getElementById('lname').value;
            //var u_username = document.getElementById('u_name').value;
           // var u_pass = document.getElementById('defpass').value;


            if (get == "")
            {
            
                if (document.getElementById('bldg').options[e.selectedIndex].value == '')
                {
                    document.getElementById('bldg').options[0].innerText = "Please select";
                    document.getElementById('bldg').focus();
                    document.getElementById('bldg').style.borderColor = "#B94A48";
                    document.getElementById('bldg').style.color = "#B94A48";
                }
                    

            }

            else
            {
                
                swal({
                        title: "Save new room?",
                        text: "",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: '#b05544',
                        confirmButtonText: 'Yes',
                        cancelButtonText: "No",
                        closeOnConfirm: false,
                        closeOnCancel: false

                },
                function(isConfirm){
                    if (isConfirm) {
                         

                      
                        $.ajax({
                                    type: 'POST',
                                    url: 'INCLUDES/submitRoom.php',
                                    async: false,
                                    data: {
                                        _room: room,
                                        _bldg: get

                                        /*_acctype: get,
                                        _mname: mnameuser,
                                        _lname: lnameuser,
                                        _username: u_username,
                                        _defpass: u_pass*/
                                    },
                                    success: function(data) {
                                        

                                        swal("Room added! ", "Page will be reloaded.", "success");
                                        
                                        setTimeout(function() 
                                        {
                                            window.location = 'adminRoom.php';
                                            //document.getElementById('add-regular').click();
                                            
                                            //mywindow.close();

                                            return true;
                                        },3000);
                                        

                                    },
                                    error: function(data) {
                                       
                                        swal("Error", "Something is wrong.", "error");
                                    }

                                }); 

                        
                                
                    
                    

                    } 
                    else
                    {
                        swal("Cancelled", "Account is not created.", "error");
                    }
                });
                
             }
           
            

        });
    </script>

    <script>
        $(document).ready(function() {
            App.init();
            TableManageResponsive.init();
            TableManageButtons.init();
        });
    </script>
</body>
</html>
