<?php include('../layout/header.php'); ?>
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="../assets/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="../assets/select2/css/select2.min.css">
<link rel="stylesheet" href="../assets/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="../assets/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../assets/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../assets/datatables-buttons/css/buttons.bootstrap4.min.css">

<?php include('../layout/sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Investor Payout</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Investor Payout</li>
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
                        <div class="card-header">
                            <!-- <h3 class="card-title">Property Details</h3> -->
                            <span class="float-right">
                                <button class="btn btn-info float-right m-1" data-toggle="modal"
                                    data-target="#modal-Property">Add Investor Payout</button>
                                <button class="btn btn-secondary float-right m-1" data-toggle="modal"
                                    data-target="#modal-import">Import</button>
                            </span>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Investor Name</th>
                                        <th style="width: 5%">Investment Amount</th>
                                        <th>Payout Date</th>
                                        <th style="width: 8%">Principal Amount</th>
                                        <th style="width: 8%">Profit Amount</th>
                                        <th>Total payout</th>
                                        <th>Payment Mode</th>
                                        <th>Beneficiary</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Investor</td>
                                        <td>AED 1000</td>
                                        <td>08/08/2024</td>
                                        <td>AED 1000</td>
                                        <td>AED 200</td>
                                        <td>AED 1200</td>
                                        <td>Bank Transfer</td>
                                        <td>Fama</td>
                                        <td>
                                            <button class="btn btn-info" data-toggle="modal"
                                                data-target="#modal-Property"><i class="fas fa-pencil-alt"></i></button>
                                            <button class="btn btn-danger" onclick="deleteConf()"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->


        <div class="modal fade" id="modal-Property">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Investment</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" id="PropertyForm">
                        <input type="hidden" name="id" id="Property_id">
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label>Investment</label>
                                        <select class="form-control select2">
                                            <option value="">Select Investment</option>
                                            <option value="1">Inv 1</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="inputEmail3" class="col-form-label">Payout Date</label>
                                        <div class="input-group date" id="investmentdate" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#investmentdate" placeholder="dd-mm-YYYY" />
                                            <div class="input-group-append" data-target="#investmentdate" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label>Principal returned</label>
                                        <input type="number" class="form-control" placeholder="Principal returned">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="inputEmail3" class="col-form-label">Profit Amount</label>
                                        <input type="number" class="form-control" placeholder="Profit Amount">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="inputEmail3" class="col-form-label">Total Payout</label>
                                        <input type="number" class="form-control" placeholder="Total Payout">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="inputEmail3" class="col-form-label">Payment Mode</label>
                                        <label for="exampleInputEmail1">Payment Mode</label>
                                        <select class="form-control select2" name="payment_mode" id="payment_mode">
                                            <option value="">Select</option>
                                            <option value="1">Cash</option>
                                            <option value="bank">Bank Transfer</option>
                                            <option value="chq">Cheque</option>
                                            <option value="cc">Credit card</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="exampleInputEmail1">Beneficiary</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Beneficiary">
                                    </div>
                                    <div class="col-md-6 bank">
                                        <label for="exampleInputEmail1">Bank Name</label>
                                        <select class="form-control select2" name="company_id" id="company_id">
                                            <option value="">Select bank</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 chq">
                                        <label for="exampleInputEmail1">Cheque No</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cheque No">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 chq">
                                        <label for="exampleInputEmail1">Cheque Issuer</label>
                                        <select class="form-control select2" name="cheque_issuer" id="cheque_issuer">
                                            <option value="">Select</option>
                                            <option value="self">Self</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info">Save changes</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal fade" id="modal-import">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Import</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" id="PropertyImportForm" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Import excel</label>
                                    <input type="file" name="file" class="col-sm-9 form-control">
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" id="importBtn" class="btn btn-info">Import</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('../layout/footer.php'); ?>
<!-- Select2 -->
<script src="../assets/select2/js/select2.full.min.js"></script>
<script src="../assets/moment/moment.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../assets/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
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


<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["excel"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });

    $('#investmentdate').datetimepicker({
        format: 'DD-MM-YYYY'
    });

    $('#maturityDate').datetimepicker({
        format: 'DD-MM-YYYY'
    });

    $(document).ready(function() {
        $('.bank').hide();
        $('.chq').hide();
        $('.chqot').hide();
    });
    $('#payment_mode').change(function() {
        var payment_mode = $(this).val();
        if (payment_mode == 'chq') {
            $('.chq').show();
            $('.bank').hide();
            $('.chqot').hide();
        } else if (payment_mode == 'bank') {
            $('.bank').show();
            $('.chq').hide();
            $('.chqot').hide();
        } else {
            $('.bank').hide();
            $('.chq').hide();
            $('.chqot').hide();
        }
    });
</script>