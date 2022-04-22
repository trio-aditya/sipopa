<!-- Start Header -->
<?= $this->include('layout/header'); ?>
<!-- End Header -->

<!-- Site wrapper -->
<div class="wrapper">

    <!-- Start Topnav -->
    <?= $this->include('layout/topnav'); ?>
    <!-- End Topnav -->

    <!-- Start Navbar -->
    <?= $this->include('layout/navbar'); ?>
    <!-- End Navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Start Content -->
        <?= $this->renderSection('content'); ?>
        <!-- End Content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Start Footer -->
    <?= $this->include('layout/footer'); ?>
    <!-- End Footer -->