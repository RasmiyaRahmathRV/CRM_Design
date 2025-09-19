<?php include('../layout/header.php'); ?>
<!-- daterange picker -->
<link rel="stylesheet" href="../assets/daterangepicker/daterangepicker.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="../assets/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="../assets/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="../assets/select2/css/select2.min.css">
<link rel="stylesheet" href="../assets/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="../assets/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../assets/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../assets/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="../assets/bs-stepper/css/bs-stepper.min.css">

<?php include('../layout/sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Vendor Wise Report</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Vendor Wise Report</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="card card-info">
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form-horizontal">
                                    <div class="form-group row m-4">
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1">From</label>
                                            <div class="input-group date" id="dateFrom" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" data-target="#dateFrom" placeholder="dd-mm-YYYY" />
                                                <div class="input-group-append" data-target="#dateFrom" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1">To</label>
                                            <div class="input-group date" id="dateTo" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" data-target="#dateTo" placeholder="dd-mm-YYYY" />
                                                <div class="input-group-append" data-target="#dateTo" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-1 float-right mb-2">
                                            <button type="button" class="btn btn-info">Search</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <!-- /.card -->

                            <div class="card searchCheque">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered projects ">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">Vendor Name</th>
                                                <th colspan="8">Direct Flat</th>
                                                <th colspan="8">Under Faateh</th>
                                            </tr>
                                            <tr>
                                                <th>Studio</th>
                                                <th>1BHK</th>
                                                <th>2BHK</th>
                                                <th>3BHK</th>
                                                <th>4BHK</th>
                                                <th>5BHK</th>
                                                <th>6BHK</th>
                                                <th>Total Flats</th>
                                                <th>Studio</th>
                                                <th>1BHK</th>
                                                <th>2BHK</th>
                                                <th>3BHK</th>
                                                <th>4BHK</th>
                                                <th>5BHK</th>
                                                <th>6BHK</th>
                                                <th>Total Flats</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Inop Realty LLC</td>
                                                <td>54</td>
                                                <td>64</td>
                                                <td>454</td>
                                                <td>728</td>
                                                <td>15</td>
                                                <td>t</td>
                                                <td>1315</td>
                                                <td>74</td>
                                                <td>259</td>
                                                <td>1147</td>
                                                <td>t</td>
                                                <td>267</td>
                                                <td>15</td>
                                                <td>2</td>
                                                <td>e</td>
                                                <td>1764</td>
                                            </tr>
                                            <tr>
                                                <td>Al Kabbani Properties</td>
                                                <td>54</td>
                                                <td>64</td>
                                                <td>454</td>
                                                <td>728</td>
                                                <td>15</td>
                                                <td></td>
                                                <td>1315</td>
                                                <td>74</td>
                                                <td>259</td>
                                                <td>1147</td>
                                                <td></td>
                                                <td>267</td>
                                                <td>15</td>
                                                <td>2</td>
                                                <td></td>
                                                <td>1764</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>

    </section>
</div>

<?php include('../layout/footer.php'); ?>
<!-- Select2 -->
<script src="../assets/select2/js/select2.full.min.js"></script>

<script src="../assets/moment/moment.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../assets/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- date-range-picker -->
<script src="../assets/daterangepicker/daterangepicker.js"></script>
<!-- DataTables  & Plugins -->
<script src="../assets/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/jszip/jszip.min.js"></script>
<script src="../assets/pdfmake/pdfmake.min.js"></script>
<script src="../assets/pdfmake/vfs_fonts.js"></script>
<script src="../assets/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../assets/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- BS-Stepper -->
<script src="../assets/bs-stepper/js/bs-stepper.min.js"></script>

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": false,
            "lengthChange": false,
            "autoWidth": false,
            "scrollX": true,
            "buttons": ["excel", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
        });
    });
    $('#dateFrom').datetimepicker({
        format: 'DD-MM-YYYY'
    });

    $('#dateTo').datetimepicker({
        format: 'DD-MM-YYYY'
    });
</script>