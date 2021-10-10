<?php $this->extend('Layout/body'); ?>

<!-- Content Wrapper. Contains page content -->

<?php $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">About</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>River Monitoring System</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="body-card">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div id="carousel" class="carousel slide" data-ride="carousel">

                                        <!-- Indicators -->
                                        <ul class="carousel-indicators">
                                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel" data-slide-to="1"></li>
                                        </ul>

                                        <!-- The slideshow -->
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="<?= base_url() ?>/public/dist/img/photo1.png" alt="1"
                                                    height="400" width="100%">

                                            </div>
                                            <div class="carousel-item">
                                                <img src="<?= base_url() ?>/public/dist/img/photo2.png" alt="2"
                                                    height="400" width="100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h1>Hi!</h1>
                                        <p align="justify">River Monitoring System merupakan layanan yang tersedia
                                            untuk
                                            memantau dan
                                            mengawasi keadaan ketinggian air sungai dengan berbasis IoT (Internet of
                                            Things). Sistem ini dilengkapi oleh sensor water level, rain gauge,
                                            temperature, pH, dan conductivity yang berguna untuk pemantauan kondisi air
                                            sungai. teknologi jaringan yang digunakan pada sistem ini berupa teknologi
                                            Nb-IoT.
                                            <br>
                                            <br>
                                            Sistem Monitoring berbasis web ini menampilkan berbagai jenis data dalam
                                            bentuk value, grafik, dan tabel. terdapat fitur status air sungai yang
                                            terdiri dari status Aman, status Siaga, dan status Waspada.
                                        </p>
                                        <h6><b><i>Location Station 1:</b> Drainase Politeknik Negeri Semarang</i>
                                        </h6>
                                        <h6><b><i>Location Station 2:</b> LabIoT Politeknik Negeri Semarang</i></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
</div>
<!-- /.content-wrapper -->
<br>
</section>
</div>
<!-- /.container-fluid -->

<!-- /.content -->
<?php $this->endSection(); ?>