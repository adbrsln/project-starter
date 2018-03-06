<?php include 'include/header.php'?>
    <h1>Halaman Utama <small>Pentadbir Negeri</small></h1>
        <hr>
        <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-home" aria-hidden="true"></i></li>
        </ol>
        </nav>

    
    <div class="row">
        <?php include 'include/sidebar.php';?>

        <div class="col-9" >
            <div class="row">
                <div class="col-6">
                    <a href="#" class="text-white" data-toggle="modal" data-target="#modal1">
                    <div class="card text-center text-white bg-success mb-3" >
                        <div class="card-body">
                            <h2><i class="fa fa-user" aria-hidden="true"></i></h2>
                            <h3>1,100</h3>
                            <h6>Jumlah Ahli Kelana Negeri</h6> 
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="#" class="text-white" data-toggle="modal" data-target="#modal1">
                    <div class="card text-center text-white bg-info mb-3" >
                        <div class="card-body">
                            <h2><i class="fa fa-free-code-camp" aria-hidden="true"></i></h2>
                            <h3>2,100</h3>
                            <h6>Aktiviti Ahli Kelana Negeri</h6> 
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="#" class="text-white" data-toggle="modal" data-target="#modal1">
                    <div class="card text-center text-white bg-danger mb-3" >
                        <div class="card-body">
                            <h2><i class="fa fa-star-o" aria-hidden="true"></i></h2>
                            <h3>1,100</h3>
                            <h6>Pencapaian Ahli Kelana Negeri</h6> 
                        </div>
                    </div>
                    </a>
                </div>
                
                <div class="col-6">
                    <div class="card text-center text-white bg-primary mb-3" >
                        <div class="card-body">
                            <h2><i class="fa fa-flag" aria-hidden="true"></i></h2>
                            <h3>11</h3>
                            <h6>Daerah Dalam Negeri</h6> 
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
    
</main>
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Jumlah Keahlian Kelana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <div id="container"></div>
      </div>
        
      
    </div>
  </div>
</div>

<script>
Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Bancian Jumlah Kumpulan Setiap Daerah'
    },
    subtitle: {
        text: 'Tahun 2017'
    },
    xAxis: {
        categories: ['Petaling', 'Hulu Langat', 'Klang', 'Gombak', 'Kuala Langat','Sepang','Kuala Selangor','Hulu Selangor','Sabak Bernam'],
        title: {
            text: null
        }
      },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Kumpulan',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: 'Kumpulan'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Tahun 2017',
        data: [44, 31, 26, 57, 42, 31, 22, 34, 10]
    }]
});
</script>
<?php include 'include/footer.php'?>   