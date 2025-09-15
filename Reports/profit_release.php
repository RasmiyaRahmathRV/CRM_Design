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
                    <h1>Profit Release Summary</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Profit Release Summary</li>
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

                            <div class="card">
                                <div class="card-header">
                                    <a class="btn btn-info float-right" href="../Reports/companywise_inv_detailed.php">Detailed report</a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered projects ">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">#</th>
                                                <th rowspan="2">Investor Name</th>
                                                <th colspan="9">Released</th>
                                                <th rowspan="2">Released Total</th>
                                                <th colspan="4">Not Released</th>
                                                <th rowspan="2">Not Released Total</th>
                                                <th rowspan="2">Grand Total</th>
                                                <th rowspan="2">% Profit Release</th>
                                                <!-- <th></th> -->
                                            </tr>
                                            <tr>
                                                <td>Jan</td>
                                                <td>Feb</td>
                                                <td>Mar</td>
                                                <td>Apr</td>
                                                <td>May</td>
                                                <td>Jun</td>
                                                <td>Jul</td>
                                                <td>Aug</td>
                                                <td>Sep-Due</td>
                                                <td>Sep-Due</td>
                                                <td>Oct</td>
                                                <td>Nov</td>
                                                <td>Dec</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>F&D</td>
                                                <td>13,282,525</td>
                                                <td>4,601,373</td>
                                                <td>58.11%</td>
                                                <td>1</td>
                                                <td>FAMA</td>
                                                <td>13,976,500</td>
                                                <td>9,336,346</td>
                                                <td>64.33%</td>
                                                <td>1</td>
                                                <td>W&B</td>
                                                <td>9,839,151</td>
                                                <td>4,023,091</td>
                                                <td>52.44%</td>
                                                <td>FAMA INV</td>
                                                <td>22,131,841</td>
                                                <td>5,683,375</td>
                                                <td>14.52%</td>
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

    });
    $('#dateFrom').datetimepicker({
        format: 'DD-MM-YYYY'
    });

    $('#dateTo').datetimepicker({
        format: 'DD-MM-YYYY'
    });
</script>