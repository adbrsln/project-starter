<?php include '../include/function.php';
check(1);
$staffid = $_SESSION['sid'] ;
$src = $_SESSION['img'] ;
$ns = ucwords($_SESSION['nama']);

if ($src != "") {
  $imgsrc = '<img class="img-circle bot-left mb-3" src="../image/user/'.$src.'.jpg" style="width:150px;height:150px;">';  
}else 
{
  $imgsrc = '<img class="img-circle bot-left mb-3" src="../image/user.jpg" style="width:150px;height:150px;">';
  
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Sistem Pengurusan Maklumat Pengakap Kelana Selangor (SPKS)</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
    body {
    padding-top: 5rem;
    padding-bottom: 5rem;
    }
    .starter-template {
    padding: 3rem 1.5rem;
    text-align: center;
    }
    a:hover { text-decoration: none; }
    .img-circle {
            border-radius: 50%;
            
        }
        
    </style>
    
    <link rel="stylesheet" href="../css/sweetalert.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" >
    <script defer src="../js/fontawesome-all.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>   
    <script src="../js/sweetalert.min.js"></script>
    <link href="../include/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="index.php">Sistem Pengurusan Maklumat Pengakap Kelana Selangor</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          
        </ul>
            <a class="btn btn-outline-info my-2 my-sm-0" href="../include/logout.php">Log Keluar</a>
           
      </div>
    </nav>

    <main role="main" class="container">
    