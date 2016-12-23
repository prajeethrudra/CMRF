<!DOCTYPE html>
<html lang="en">
<?php 
include 'config.php';
$username=$_SESSION['username'];
if($username=="venkat"){

?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
    .row{margin-right: 15px;}
</style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">CMRF</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome <i class="fa fa-user"></i><?php echo $username?>  <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
                        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="tables.php"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                     <li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Forms<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="forms.php"><i class="fa fa-fw fa-edit"></i> Add Record</a>
                            </li>
                            <li>
                                <a href="modify records.php"><i class="fa fa-fw fa-wrench"></i> Modify Records</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            CMRF LIST
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> CMRF LIST
                            </li>
                        </ol>
                    </div>
                </div>
                
                    
                <!-- /.row -->
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Patient</th>
                                            <th>Fund</th>
                                            <th>Disease</th>
                                            <th>Gender</th>
                                            <th>Hospital</th>
                                            <th>Mobile Number</th>
                                            <th>Mandal</th>
                                            <th>District</th>
                                            <th>Date Of Sanction</th>
                                            <th>Delete Account</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 
if(isset($_POST['delete']))
{
    $uniqueid=$_POST['uniqueid'];
    mysql_query("Delete from cmrflist where unique_id='$uniqueid'");
}
?>                                    
<?php
$query1=mysql_query("SELECT * FROM cmrflist");
while ($fquery1=mysql_fetch_array($query1)) {

    $patient_name=$fquery1['patient_name'];
    $fund=$fquery1['fund'];
    $gender=$fquery1['gender'];
    $disease=$fquery1['disease'];
    $hospital_name=$fquery1['hospital_name'];
    $address=$fquery1['address'];
    $mobile_number=$fquery1['mobile_number']; 
    $mandal=$fquery1['mandal'];
    $district=$fquery1['district'];
    $date_of_sanction=$fquery1['date_of_sanction'];
    $uniqueid=$fquery1['unique_id']
?>                                    
                                        <tr class="odd gradeX">
                                           <td><?php echo $patient_name ?></td>
                                            <td><?php echo $fund ?></td>
                                            <td><?php echo $disease ?></td>
                                            <td><?php echo $gender ?></td>
                                            <td><?php echo $hospital_name ?></td>
                                            <td><?php echo $mobile_number ?></td>
                                            <td><?php echo $mandal ?></td>
                                            <td><?php echo $district ?></td>
                                            <td><?php echo $date_of_sanction ?></td>
                                            <form method="POST" action="modify records.php">
                                            <td><button type="submit" class="btn btn-danger" name="delete">Delete</button></td>
                                            <input type="hidden" value="<?php echo $uniqueid ?>" name="uniqueid">
                                            </form>

                                        </tr>
<?php } ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>
<?php
}
else{
    header("Location:logout.php");
}
?>