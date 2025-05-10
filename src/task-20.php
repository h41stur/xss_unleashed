<?php
    setcookie("h41stur", time() + (86400 * 30), "/");
    $xss = $_GET["search"];
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Crossing the Line: XSS Unleashed</title>
  <?php include_once 'controllers/header.php'; ?>
  <?php echo $meta_tags; ?>
  <?php echo $stylesheet; ?>
  <?php echo $js; ?>

</head>
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse ">

<div class="wrapper">

 <!-- Navbar d-lg-none d-xl-none-->
  <nav class="main-header navbar navbar-expand navbar-light">
    <ul class="navbar-nav mt-1">
      <li class="nav-item">
        <a class="nav-link  pd10" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->
  <?php include('sidebar.php'); ?>


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header   -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    <div class="container">
        <h1 align="center" class="h41stur">Task 20 - JSON Parsing Multi-Level</h1>
        <br>
        <br>
      <div align="center"><img width="400" src="../img/xss_unleashed.jpg" /></div>
      <br>
    

    <h1 align="center" class="h41stur">H41stur Banking Account</h1>
    <br>
    <h2 align="center" class="h41stur" id="user_id">User ID:3663</h2>
    <h2 align="center" class="h41stur" id="exploit"></h2>
    <h2></h2>

    <h2 class="h41stur">Search Engine: <?php echo $xss; ?></h2>
    <p>
        <div class="well">
            <p><b>Objectives:</b></p>

            <p>
                <ol>

                    <li>Find the user password using XSS vulnerability</li>
                    <li>Exfilter the user password and load it into an element with id "exploit"</li>
                    <li>Send the user password to attacker machine</li>
                </ol>

            </p>
        </div>
        <div class="well">
            <p><b>Instructions:</b></p>

            <p>
                <ol>
                    <li>Get the token from the /task-20/getToken/ endpoint with a GET request passing the user id as a parameter</li>
                    <li>Get the password from the /task-20/getPass/ endpoint with a GET request passing the user id and token as parameters</li>
                </ol>

            </p>

        </div>

    <a href="../">Return to tasks list</a>

    </div>


</body>
</html>