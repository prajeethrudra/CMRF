<?php 
include 'config.php';
$username=$_SESSION['username'];
if($username=="venkat"){
?>
<!DOCTYPE html>

<html lang="en">

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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome <i class="fa fa-user"></i><?php echo $username?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
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
                            New Account
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> New Account
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" method="POST" action="forms.php">

                            <div class="form-group">
                                <label>Patient Name</label>
                                <input class="form-control" name="patient_name">
                            </div>

                            <div class="form-group">
                                <label>Fund</label>
                                <input class="form-control" name="fund" />
                            </div>

                            <div class="form-group">
                                <label>Disease</label>
                                <input class="form-control" name="disease">
                            </div>

                            <div class="form-group">
                                <label>Hospital Name</label>
                                <input class="form-control" name="hospital_name">
                            </div>

                            <div class="form-group">
                                <label>GENDER</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="male" checked>Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="female">Female
                                    </label>
                                </div>
                                
                            </div>

                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input class="form-control" name="mobile_number">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" rows="3" name="address"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Mandal</label>
                                <input class="form-control" name="mandal">
                            </div>
                            <div class="form-group">
                                <label>District</label>
                                <input class="form-control" name="district">
                            </div>
                            <div class="form-group">
                                <label>Date Of Sanction</label>
                                <input  type="date" class="form-control" name="date_of_sanction">
                            </div>
                            
                            <button type="submit" class="btn btn-primary" name="saverecord">Save Record</button>
                            <button type="reset" class="btn btn-default">Reset Form</button>

                        </form>
<?php 
if(isset($_POST['saverecord']))
{
    $patient_name=$_POST['patient_name'];
    $fund=$_POST['fund'];
    $disease=$_POST['disease'];
    $gender=$_POST['optionsRadios'];
    $hospital_name=$_POST['hospital_name'];
    $address=$_POST['address'];
    $mobile_number=$_POST['mobile_number']; 
    $mandal=$_POST['mandal'];
    $district=$_POST['district'];
    $date_of_sanction=$_POST['date_of_sanction'];
    $unique_id = uniqid();

    echo $patient_name;
    echo $fund;
    echo $disease;
    echo $gender;

    if($unique_id&&$patient_name&&$fund&&$disease&&$gender&&$hospital_name&&$address&&$mobile_number&&$mandal&&$district&&$date_of_sanction)
    {
        echo "hi im in";
        mysql_query("INSERT INTO cmrflist (unique_id,patient_name,fund,disease,gender,hospital_name,address,mobile_number,mandal,district,date_of_sanction) VALUES ('$unique_id','$patient_name','$fund','$disease','$gender','$hospital_name','$address','$mobile_number','$mandal','$district','$date_of_sanction')");
    }

}
?>                        

                    </div>
                    
                <!-- /.row -->
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
<?php }

else{
    header("Location:login.php");
}
?>