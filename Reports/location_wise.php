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
                    <h1>Location Wise Report</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Location Wise Report</li>
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

                            <div class="card ">
                                <div class="card-header">
                                    <a class="btn btn-info float-right" href="../Reports/location_wise_detailed.php">Detailed report</a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered projects ">
                                        <thead>
                                            <tr>
                                                <th>Location</th>
                                                <th>No Of Direct Flats</th>
                                                <th>Flats under Faateh</th>
                                                <th>Company Wise Total</th>
                                                <th>% of Grand Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>AL MUTEENA</td>
                                                <td>392 </td>
                                                <td>177 </td>
                                                <td>569 </td>
                                                <td>10.80%</td>
                                            </tr>
                                            <tr>
                                                <td>AL MURAQQABAT</td>
                                                <td>277</td>
                                                <td>260</td>
                                                <td>537</td>
                                                <td>10.19%</td>
                                            </tr>
                                            <tr>
                                                <td>AL KARAMA</td>
                                                <td>376</td>
                                                <td>148</td>
                                                <td>524</td>
                                                <td>9.95%</td>
                                            </tr>
                                            <tr>
                                                <td>AL HAMRIYA</td>
                                                <td>176</td>
                                                <td>118</td>
                                                <td>294</td>
                                                <td>5.58%</td>
                                            </tr>
                                            <tr>
                                                <td>AL BARSHA</td>
                                                <td>267</td>
                                                <td>16</td>
                                                <td>283</td>
                                                <td>5.37%</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Grand Total</th>
                                                <th>3502</th>
                                                <th>1766</th>
                                                <th>5268</th>
                                                <th>100.00%</th>
                                            </tr>
                                        </tfoot>
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
        $('#example2').DataTable({
            "responsive": false,
            "lengthChange": false,
            "autoWidth": false,
            "scrollX": true,
            "buttons": ["excel", "print", "colvis"]
        }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
    $('#dateFrom').datetimepicker({
        format: 'DD-MM-YYYY'
    });

    $('#dateTo').datetimepicker({
        format: 'DD-MM-YYYY'
    });
</script>