<?php $this->extend('Layout/body'); ?>

<!-- Content Wrapper. Contains page content -->

<?php $this->section('content'); ?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <br>
                    <h1>Chart</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-6">
                    <!-- grafik dinamis -->
                    <div class="graphic">
                        <script src="<?= base_url() ?>/public/dist/js/jquery-latest.js"></script>
                        <script>
                        var refreshId = setInterval(function() {
                            $('#responsecontainer1').load('<?= base_url() ?>/app/Views/Station1/dataRain.php');
                        }, 1000);
                        </script>

                        <script type="text/javascript" src="<?= base_url() ?>/public/dist/js/jquery-3.4.0.min.js">
                        </script>
                        <script type="text/javascript" src="<?= base_url() ?>/public/dist/js/mdb.min.js"></script>

                        <div id="responsecontainer1"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <!-- grafik dinamis -->
                    <div class="graphic">
                        <script src="<?= base_url() ?>/public/dist/js/jquery-latest.js"></script>
                        <script>
                        var refreshId = setInterval(function() {
                            $('#responsecontainer2').load('dataWater.php');
                        }, 1000);
                        </script>

                        <script type="text/javascript" src="<?= base_url() ?>/public/dist/js/jquery-3.4.0.min.js">
                        </script>
                        <script type="text/javascript" src="<?= base_url() ?>/public/dist/js/mdb.min.js"></script>

                        <div id="responsecontainer2"></div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<?php $this->endSection(); ?>