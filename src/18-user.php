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
        <h1 align="center" class="h41stur">User Data</h1>
        <br>
        <br>
      <div align="center"><img width="400" src="../../img/h41stur.jpeg" /></div>
      <br>
    

    <h1 align="center" class="h41stur"></h1>
    <br>
    <p id="user_data" class="h41stur">Name: João Sem Braço, CPF: 340.737.420-86</p>
    <h2 align="center" class="h41stur" id="exploit"></h2>
    <h2></h2>
    

    <a href="task-18/">Return</a>

    </div>


</body>
</html>