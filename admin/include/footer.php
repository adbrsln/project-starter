<!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../include/jquery.min.js" ></script>
    <!-- <script src="../js/jquery.min.js" ></script> -->
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../include/datatable/jquery.dataTables.min.js"></script>
    <script src="../include/datatable/dataTables.bootstrap4.min.js"></script>

    <script>
    // $(document).ready(function() {
    //     $('#example').DataTable();
    // } );

    $('#example').DataTable( {
        responsive: true
    } );
    </script>
    <script>
        $(document).ready(function () {
            var linkURL="";
            $('.btn-del').click(function(e) {
            e.preventDefault(); // Prevent the href from redirecting directly
            var linkURL = $(this).attr("href");
            warnBeforeRedirect(linkURL);
            });
        
            function warnBeforeRedirect(linkURL) {
            //alert(linkURL);
                swal({
                title: "Anda Pasti?",
                text: "Tindakan ini Tidak Boleh Diulang Semula!",
                type: "warning",confirmButtonColor: "#DD6B55",
                confirmButtonText:"Ok",
                cancelButtonText: "Batal",
                showCancelButton: true
                }, function() {
                // Redirect the user
                window.location.href = linkURL;
                });
            }
        });
    </script>
    <?php
    if(isset($_GET['s'])){
        $s = $_GET['s'];
        switch ($s){
            case 'td':
            echo  '<script type="text/javascript" language="javascript">
            swal("Berjaya", "Pemadaman Rekod Berjaya", "success");</script>';
            break;
            case 'fd':
            echo  '<script type="text/javascript" language="javascript">
            swal("Gagal", "Pemadaman Rekod Gagal", "error");</script>';
            break;
            case 'tss':
            echo  '<script type="text/javascript" language="javascript">
            swal("Lulus", "Pencapaian Sub Skima Berjaya", "success");</script>';
            break;
            case 'fss':
            echo  '<script type="text/javascript" language="javascript">
            swal("Gagal", "Pencapaian Sub Skima Gagal", "error");</script>';
            break;
            case 'lt':
            echo  '<script type="text/javascript" language="javascript">
            swal("Berjaya", "Penambahan Lencana Berjaya", "success");</script>';
            break;
            case 'st':
            echo  '<script type="text/javascript" language="javascript">
            swal("Berjaya", "Penambahan Skima Berjaya", "success");</script>';
            break;
            case 'sst':
            echo  '<script type="text/javascript" language="javascript">
            swal("Berjaya", "Penambahan Sub Skima Berjaya", "success");</script>';
            break;
            case 'ddt':
            echo  '<script type="text/javascript" language="javascript">
            swal("Berjaya", "Maklumat Daerah Berjaya Diubah", "success");</script>';
            break;
            case 'ddf':
            echo  '<script type="text/javascript" language="javascript">
            swal("Gagal", "Maklumat Daerah Gagal Diubah", "error");</script>';
            break;
            case 'dt':
            echo  '<script type="text/javascript" language="javascript">
            swal("Berjaya", "Daerah Berjaya Dipadam", "success");</script>';
            break;
            case 'df':
            echo  '<script type="text/javascript" language="javascript">
            swal("Gagal", "Daerah Gagal Dipadam", "error");</script>';
            break;
            case 'rt':
            echo  '<script type="text/javascript" language="javascript">
            swal("Berjaya", "Katalaluan Pengguna Berjaya di Reset", "success");</script>';
            break;
            case 'dpt':
            echo  '<script type="text/javascript" language="javascript">
            swal("Berjaya", "Pengguna Berjaya Dipadam", "success");</script>';
            break;
            case 'ftf':
            echo  '<script type="text/javascript" language="javascript">
            swal("Gagal", "Memuat naik telah gagal, Sila pastikan fail gambar berjenis .png atau .jpg sahaja dibenarkan", "error");</script>';
            break;
            case 'fes':
            echo  '<script type="text/javascript" language="javascript">
            swal("Gagal", "Memuat naik telah gagal, sila cuba lagi.", "error");</script>';
            break;
            case 'uf':
            echo  '<script type="text/javascript" language="javascript">
            swal("Gagal", "Memuat naik telah gagal, sila cuba lagi.", "error");</script>';
            break;
            case 'cpt':
            echo  '<script type="text/javascript" language="javascript">
            swal("Berjaya", "Katalaluan Pengguna Berjaya Diubah", "success");</script>';
            break;
            case 'cpf':
            echo  '<script type="text/javascript" language="javascript">
            swal("Gagal", "Katalaluan Pengguna Gagal Diubah", "error");</script>';
            break;
            default:
            }
}
?>
  </body>
</html>
