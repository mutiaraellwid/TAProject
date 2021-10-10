<?php $this->extend('Layout/body'); ?>

<!-- Content Wrapper. Contains page content -->

<?php $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard-Station 2</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <?php 
                    foreach ($dashboard as $key => $value) {
                        $datetime= $value['DateTime'];
                        $date = $value['tgl'];
                        $time = $value['waktu'];
                        $rain = $value['Rain_Gauge'];
                        $water= $value['Water_Level'];
                        $suhu= $value['Temperature'];
                        $ph = $value['pH'];
                        $conductivity= $value['Conductivity'];
                    }
                ?>
                <div class="col-lg-4">
                    <!-- small box -->
                    <div class="small-box bg-teal">
                        <div class="inner">
                            <h1><?= $rain ?></h1>
                            <p> Milimeters</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-umbrella"></i>
                        </div>
                        <a href="" class="small-box-footer">RAIN GAUGE</i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- small box -->
                    <div class="small-box bg-teal">
                        <div class="inner">
                            <h1><?= $water ?></h1>
                            <p> Centimeters</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-levels"></i>
                        </div>
                        <a href="#" class="small-box-footer">WATER LEVEL</i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- small box -->
                    <div class="small-box bg-teal">
                        <div class="inner">
                            <h1><?= $suhu ?></h1>
                            <p> Celcius</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-levels"></i>
                        </div>
                        <a href="#" class="small-box-footer">TEMPERATURE</i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <!-- small box -->
                    <div class="small-box bg-teal">
                        <div class="inner">
                            <h1><?= $ph ?></h1>
                            <p> pH</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-umbrella"></i>
                        </div>
                        <a href="" class="small-box-footer">PH</i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- small box -->
                    <div class="small-box bg-teal">
                        <div class="inner">
                            <h1><?= $conductivity ?></h1>
                            <p> S/ms</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-levels"></i>
                        </div>
                        <a href="#" class="small-box-footer">CONDUCTIVITY</i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- small box -->
                    <div class="small-box bg-lightblue">
                        <div class="inner">
                            <br>
                            <h3><?= $datetime ?></h3>
                            <br>
                            <a href="#" class="small-box-footer">LAST UPDATE</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <?php if ($water >= 20) : ?>
                    <div class="card card-danger">
                        <div class="card-header">
                            <div class="card-title">
                                <i class="ion ion-alert"></i>

                                <h3>STATUS</h3>
                            </div>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <div class="body-card">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="google-maps">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.6283847708164!2d110.43634416347575!3d-7.052878357752073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c0396ceec97%3A0x10b388f0c8411e72!2sPoliteknik%20Negeri%20Semarang!5e0!3m2!1sid!2sid!4v1628616571741!5m2!1sid!2sid"
                                            width="100%" height="350" style="border:0;" allowfullscreen=""
                                            loading="lazy"></iframe>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 style="text-align: center; margin-top: 15px; margin-bottom: 15px; font-size:50px; font-family: 'Modak', cursive;
                                            " class="animated infinite flash">
                                            OH NO..
                                        </h5>
                                        <br>
                                        <p
                                            style="border: solid 3px rgb(209, 17, 17); background: rgb(209, 17, 17); margin-bottom: 15px; text-align: center; color: white; font-size: 18px">
                                            Waspada!
                                        </p>
                                        <br>
                                        <p style="text-align: center;"> saat ini ketinggian air sudah mencapai level
                                            waspada, diharapkan
                                            tetap
                                            hati-hati dan terus mengecek kondisi air sungai secara berkala sampai
                                            status
                                            aman.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php elseif ($water >= 11 && $water <= 19 ) : ?>
                    <div class="card card-warning">
                        <div class="card-header">
                            <div class="card-title">
                                <i class="ion ion-alert"></i>

                                <h3>STATUS</h3>
                            </div>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <div class="body-card">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="google-maps">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.6283847708164!2d110.43634416347575!3d-7.052878357752073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c0396ceec97%3A0x10b388f0c8411e72!2sPoliteknik%20Negeri%20Semarang!5e0!3m2!1sid!2sid!4v1628616571741!5m2!1sid!2sid"
                                            width="100%" height="350" style="border:0;" allowfullscreen=""
                                            loading="lazy"></iframe>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 style="text-align: center; margin-top: 15px; margin-bottom: 15px; font-size:50px; font-family: 'Modak', cursive;
                                            " class="animated infinite headShake">
                                            BE CAREFUL..
                                        </h5>
                                        <br>
                                        <p
                                            style="border: solid 3px rgb(227, 230, 54); background: rgb(227, 230, 54); margin: 0; text-align: center; color: white; font-size: 18px">
                                            Siaga!
                                        </p>
                                        <p> saat ini ketinggian air sudah mencapai level siaga, diharapkan tetap
                                            hati-hati dan terus mengecek kondisi air sungai secara berkala sampai
                                            status
                                            aman.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php else : ?>
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="card-title">
                                <i class="ion ion-alert"></i>

                                <h3>STATUS</h3>
                            </div>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <div class="body-card">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="google-maps">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.6283847708164!2d110.43634416347575!3d-7.052878357752073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c0396ceec97%3A0x10b388f0c8411e72!2sPoliteknik%20Negeri%20Semarang!5e0!3m2!1sid!2sid!4v1628616571741!5m2!1sid!2sid"
                                            width="100%" height="350" style="border:0;" allowfullscreen=""
                                            loading="lazy"></iframe>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 style="text-align: center; margin-top: 15px; margin-bottom: 15px; font-size:50px; font-family: 'Modak', cursive;
                                            " class="animated infinite pulse">
                                            DON'T WORRY..
                                        </h5>
                                        <br>
                                        <p
                                            style="border: solid 3px rgb(19, 22, 226); background: rgb(19, 22, 226); margin: 0; text-align: center; color: white; font-size: 18px">
                                            Aman!
                                        </p>
                                        <p>saat ini ketinggian air mencapai level aman.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif ?>
                    <!-- /.card -->

                </div>
                <div class="col-md-4">
                    <!-- Calendar -->
                    <div class="card bg-gradient-gray black">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="far fa-calendar-alt"></i>
                                Calendar
                            </h3>
                            <!-- tools card -->
                            <div class="card-tools">
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!--The calendar -->
                            <div id="calendar" style="width: 100%"></div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- ./col -->
                    <div class="map">
                        <div id="sparkline-1"></div>
                        <div id="sparkline-2"></div>
                        <div id="sparkline-3"></div>
                    </div>
                </div>

            </div>
            <!-- /.col-md-6 -->
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /.content -->
<?php $this->endSection(); ?>