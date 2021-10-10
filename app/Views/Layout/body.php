<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>River-Monitoring</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- File CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/dist/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://cdn.lordicon.com//libs/frhvbuzj/lord-icon-2.0.2.js"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?= base_url() ?>/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="<?= base_url() ?>/public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <div class="navbar-right">
            <nav class="main-header navbar navbar-expand">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="icon-bar">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                                <i class="fas fa-bars"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        <aside class="main-sidebar sidebar-light-teal elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url() ?>/" class="brand-link">

                <center>
                    <lord-icon src="https://cdn.lordicon.com//sgodrdhn.json" trigger="loop"
                        colors="primary:#109173,secondary:#f4c89c" style="width:150px;height:150px">
                    </lord-icon>
                </center>
                <center><span class="brand-text font-weight-light">River Monitoring</span></center>

            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?= base_url() ?>/Home/about" class="nav-link">
                                <i class="nav-icon fas fa-info-circle"></i>
                                <p>About</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-sliders-h"></i>
                                <p>
                                    Station 1
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url() ?>/Station1/dashboard/" class="nav-link">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>Dashboard</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url() ?>/Station1/chart/" class="nav-link">
                                        <i class="nav-icon fas fa-chart-area"></i>
                                        <p>Chart</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url() ?>/Station1/tables/" class="nav-link">
                                        <i class="nav-icon fas fa-table"></i>
                                        <p>Tables</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-sliders-h"></i>
                                <p>
                                    Station 2
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url() ?>/Station2/dashboard/" class="nav-link">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>Dashboard</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url() ?>/Station2/chart/" class="nav-link">
                                        <i class="nav-icon fas fa-chart-area"></i>
                                        <p>Chart</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url() ?>/Station2/tables/" class="nav-link">
                                        <i class="nav-icon fas fa-table"></i>
                                        <p>Tables</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <?= $this->renderSection('content'); ?>
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>/public/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url() ?>/public/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- DataTables -->
    <script src="<?= base_url() ?>/public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url() ?>/public/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url() ?>/public/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url() ?>/public/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>/public/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url() ?>/public/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url() ?>/public/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url() ?>/public/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url() ?>/public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <!-- Summernote -->
    <script src="<?= base_url() ?>/public/plugins/summernote/summernote-bs4.min.js"></script>
    </script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/public/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url() ?>/public/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>/public/dist/js/demo.js"></script>
    <!-- FLOT CHARTS -->
    <script src="<?= base_url() ?>/public/plugins/flot/jquery.flot.js"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="<?= base_url() ?>/public/plugins/flot-old/jquery.flot.resize.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <?php 
        foreach ($chart as $key => $value) {
            $datetime[] = $value['DateTime'];
            $date[] = $value['tgl'];
            $time[] = $value['waktu'];
            $rain[] = $value['Rain_Gauge'];
            $water[]= $value['Water_Level'];
            $suhu[] = $value['Temperature'];
            $ph[] = $value['pH'];
            $conductivity[]= $value['Conductivity'];
        }
    ?>
    <script>
    var ctx = document.getElementById('rainChart');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($datetime) ?>,
            datasets: [{
                label: 'Rain',
                data: <?php echo json_encode($rain) ?>,
                backgroundColor: "rgb(233, 150, 122, 0.5)",
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>



    <script>
    var ctx = document.getElementById('waterChart');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($datetime) ?>,
            datasets: [{
                label: 'Water',
                data: <?php echo json_encode($water) ?>,
                backgroundColor: "rgb(100, 149, 237, 0.5)",
                borderColor: [
                    'rgb(100, 149, 237, 1)',
                    'rgb(85, 107, 47, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
    <script>
    var ctx = document.getElementById('phChart');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($datetime) ?>,
            datasets: [{
                label: 'pH',
                data: <?php echo json_encode($ph) ?>,
                backgroundColor: "rgb(233, 150, 122, 0.5)",
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
    <script>
    var ctx = document.getElementById('temperatureChart');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($datetime) ?>,
            datasets: [{
                label: 'Temperature',
                data: <?php echo json_encode($suhu) ?>,
                backgroundColor: "rgb(100, 149, 237, 0.5)",
                borderColor: [
                    'rgb(100, 149, 237, 1)',
                    'rgb(85, 107, 47, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
    <script>
    var ctx = document.getElementById('conductivityChart');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($datetime) ?>,
            datasets: [{
                label: 'Conductivity',
                data: <?php echo json_encode($conductivity) ?>,
                backgroundColor: "rgb(100, 149, 237, 0.5)",
                borderColor: [
                    'rgb(100, 149, 237, 1)',
                    'rgb(85, 107, 47, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
</body>

</html>