<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>admindigiskool</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="assets/css/plugins/morris.css" rel="stylesheet">
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div id="wrapper">

      <!--Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        <a class="navbar-brand" href="#"><img class="img-responsive" src="./images/logo3.png" alt="Digiskool"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>            
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> welcome :- <?php echo $login_session; ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                    </li>                        
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
                <li class="active">
                    <a href="admin_dashboard.php"><i class="fa fa-fw fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="category.php"><i class="fa fa-fw fa-users"></i> Category</a>
                </li>
                
                <!-- <li>
                    <a href="tenant_module.php"><i class="fa fa-fw fa-table"></i> Tenant</a>
                </li> -->
                <!-- <li> 
                    <a href="customer_module.php"><i class="fa fa-users"></i> Customer</a>
                </li> -->
                <!-- <li>
                    <a href="financial_module.php"><i class="fa fa-fw fa-money"></i> Financial D M.</a>
                </li>
                <li>
                    <a href="property_module.php"><i class="fa fa-fw fa-building"></i> Property D K & M</a>
                </li>                
                <li>
                    <a href="#"><i class="fa fa-fw fa-file"></i> Property Gallery</a>
                </li> 
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Messager</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user"></i> User Management</a>
                </li>   
                                
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>