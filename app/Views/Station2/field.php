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
                    <div class="card card-teal card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                Field Condition
                            </h3>
                        </div>
                        <div class="card-body">
                            <div id="carousel" class="carousel slide" data-ride="carousel">

                                <!-- Indicators -->
                                <ul class="carousel-indicators">
                                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel" data-slide-to="1"></li>
                                </ul>

                                <!-- The slideshow -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?= base_url() ?>/public/dist/img/photo1.png" alt="1" height="430"
                                            width="100%">
                                        <div class="carousel-caption">
                                            <h3>Node 1</h3>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= base_url() ?>/public/dist/img/photo2.png" alt="2" height="430"
                                            width="100%">
                                        <div class="carousel-caption">
                                            <h3>Node 2</h3>
                                        </div>
                                    </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="carousel-control-prev" href="#carousel" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#carousel" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
<?php $this->endSection(); ?>