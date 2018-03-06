<?php include 'include/function.php';check2();?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Sistem Pengurusan Maklumat Pengakap Kelana Selangor (SPKS)</title>

    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    <style>
    body {
    padding-top: 8rem;
    padding-bottom: 5rem;
    }
    </style>
  </head>

  <body>
  <nav class="navbar navbar-expand-md navbar-dark bg-info fixed-top">
      <a class="navbar-brand" href="index.php">Sistem Pengurusan Maklumat Pengakap Kelana Selangor</a>
      
    </nav>
    <div class="container">
    
      <form class="form-signin" method="post" action="include/loginproc.php">
      <div class="d-flex justify-content-center mb-2"><img src="image/SPKS.png" alt=""></div>  
      
        
        <label for="inputEmail" class="sr-only">Emel</label>
        <input type="email" id="email" name ="emel" class="form-control mb-2" placeholder="Emel" required autofocus>
        <label for="inputPassword" class="sr-only">Katalaluan</label>
        <input type="password" id="password" name ="pass" class="form-control" placeholder="Katalaluan" required>
        <p>Berminat Menjadi Ahli?<a href="register.php" > Daftar disini </a></p>
        <button class="btn btn-md btn-primary btn-block" type="submit" name="submit">Log Masuk</button>
      </form>

    </div> <!-- /container -->
  </body>
  
  <script src="js/jquery.min.js" ></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="include/dataTable/jquery.dataTables.min.js"></script>
  <script src="include/dataTable/dataTables.bootstrap4.min.js"></script>
  <?php
  if(isset($_GET['s'])){
      $s = $_GET['s'];
      switch ($s){
          case 'lot':
          echo  '<script type="text/javascript" language="javascript">
          swal("Berjaya", "Berjaya Log Keluar", "success");</script>';
          break;
          case 'lt':
          echo  '<script type="text/javascript" language="javascript">
          swal("Berjaya", "Berjaya Log Masuk", "success");</script>';
          break;
          case 'lf':
          echo  '<script type="text/javascript" language="javascript">
          swal("Gagal", "Kemungkinan Akaun anda tidak aktif atau Emel dan katalaluan anda salah. sila cuba lagi.", "error");</script>';
          break;
          case 'rt':
          echo  '<script type="text/javascript" language="javascript">
          swal("Berjaya", "Berjaya Mendaftar. Status akaun anda akan disahkan oleh kumpulan yang dipohon", "success");</script>';
          break;
          case 'rf':
          echo  '<script type="text/javascript" language="javascript">
          swal("Gagal", "Maaf anda tidak boleh berdaftar, sila hubungi pihak kami", "error");</script>';
          break;
          default:
          }
    }
    ?>
</html>
