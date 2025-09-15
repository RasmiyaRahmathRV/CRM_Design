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
                    <h1>Renewal Rental</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Renewal Rental</li>
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
                                        <div class="col-md-3">
                                            <label for="inputPassword3">Company</label>
                                            <select class="form-control select2" name="area_id">
                                                <option value="">Select Company</option>
                                                <option value="1">Fama real estate</option>
                                                <option value="1">Walls and Bricks</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword3">Project</label>
                                            <select class="form-control select2" name="area_id">
                                                <option value="">Select Project</option>
                                                <option value="1">PRJ00001</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row  m-4">
                                        <div class="col-md-3">
                                            <label for="inputPassword3">Vendor</label>
                                            <select class="form-control select2" name="area_id">
                                                <option value="">Select Vendor</option>
                                                <option value="1">Vendor 1</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword3">Property</label>
                                            <select class="form-control select2" name="area_id">
                                                <option value="">Select Property</option>
                                                <option value="1">Property 1</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword3">Unit type</label>
                                            <select class="form-control select2" name="area_id">
                                                <option value="">Select Unit type</option>
                                                <option value="1">Unit 1</option>
                                            </select>
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
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <table id="example1" class="display table table-bordered projects " style="width:100%">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Project</th>
                                                <th rowspan="2">Building</th>
                                                <th colspan="2">Rental to vendor</th>
                                                <th colspan="2">Profit %</th>
                                                <th colspan="2">Profit Earned</th>
                                                <th colspan="2">Rental Receivables</th>
                                                <th colspan="2">Monthly Rental</th>
                                            </tr>
                                            <tr>
                                                <th>Old</th>
                                                <th>New</th>
                                                <th>Old</th>
                                                <th>New</th>
                                                <th>Old</th>
                                                <th>New</th>
                                                <th>Old</th>
                                                <th>New</th>
                                                <th>Old</th>
                                                <th>New</th>
                                                <th>Old</th>
                                                <th>New</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>PRJ00058</td>
                                                <td>PRJ00350</td>
                                                <td>FF - Building name</td>
                                                <td>275,000</td>
                                                <td>250,000</td>
                                                <td>24%</td>
                                                <td>37%</td>
                                                <td>64,625</td>
                                                <td>92,375</td>
                                                <td>339,625</td>
                                                <td>342,375</td>
                                                <td>28,302</td>
                                                <td>28,531</td>
                                            </tr>
                                            <tr>
                                                <td>PRJ00058</td>
                                                <td>PRJ00812</td>
                                                <td>FF - Building name</td>
                                                <td>250,000</td>
                                                <td>250,000</td>
                                                <td>23.5%</td>
                                                <td>37%</td>
                                                <td>64,625</td>
                                                <td></td>
                                                <td>339,625</td>
                                                <td>342,375</td>
                                                <td>28,302</td>
                                                <td>28,531</td>
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
            // "responsive": true,
            "lengthChange": false,
            "autoWidth": true,
            "buttons": [{
                    extend: 'excelHtml5',
                    text: 'Excel',
                    exportOptions: {
                        columns: ':visible',
                        format: {
                            header: function(data, columnIdx) {
                                return data; // ensures plain header, no merge
                            }
                        }
                    },
                    customize: function(xlsx) {
                        var sheet = xlsx.xl.worksheets['sheet1.xml'];

                        // ====== Remove existing header row ======
                        $('row[r=1]', sheet).remove();

                        // ====== Insert your custom header rows ======
                        var header1 =
                            '<row r="1">' +
                            '<c t="inlineStr" r="A1"><is><t>Project</t></is></c>' +
                            '<c t="inlineStr" r="B1"><is><t></t></is></c>' +
                            '<c t="inlineStr" r="C1"><is><t>Building</t></is></c>' +
                            '<c t="inlineStr" r="D1"><is><t>Rental to vendor</t></is></c>' +
                            '<c t="inlineStr" r="E1"><is><t></t></is></c>' +
                            '<c t="inlineStr" r="F1"><is><t>Profit %</t></is></c>' +
                            '<c t="inlineStr" r="G1"><is><t></t></is></c>' +
                            '<c t="inlineStr" r="H1"><is><t>Profit Earned</t></is></c>' +
                            '<c t="inlineStr" r="I1"><is><t></t></is></c>' +
                            '<c t="inlineStr" r="J1"><is><t>Rental Receivables</t></is></c>' +
                            '<c t="inlineStr" r="K1"><is><t></t></is></c>' +
                            '<c t="inlineStr" r="L1"><is><t>Monthly Rental</t></is></c>' +
                            '<c t="inlineStr" r="M1"><is><t></t></is></c>' +
                            '</row>';


                        // Insert before first data row
                        sheet.childNodes[0].childNodes[1].insertBefore(
                            $.parseXML(header1).documentElement, $('row[r=2]', sheet)[0]
                        );

                        // ====== Apply merges for grouping ======
                        var mergeCells = $('mergeCells', sheet);
                        if (!mergeCells.length) {
                            $('worksheet', sheet).append('<mergeCells count="0"/>');
                            mergeCells = $('mergeCells', sheet);
                        }

                        mergeCells.attr('count', parseInt(mergeCells.attr('count')) + 7);

                        mergeCells.append('<mergeCell ref="A1:B1"/>'); // Project
                        mergeCells.append('<mergeCell ref="C1:C2"/>'); // Building
                        mergeCells.append('<mergeCell ref="D1:E1"/>'); // Rental to vendor
                        mergeCells.append('<mergeCell ref="F1:G1"/>'); // Profit %
                        mergeCells.append('<mergeCell ref="H1:I1"/>'); // Profit Earned
                        mergeCells.append('<mergeCell ref="J1:K1"/>'); // Rental Receivables
                        mergeCells.append('<mergeCell ref="L1:M1"/>'); // Monthly Rental
                    }

                },
                "print"
            ]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });
    $('#dateFrom').datetimepicker({
        format: 'DD-MM-YYYY'
    });

    $('#dateTo').datetimepicker({
        format: 'DD-MM-YYYY'
    });

    $(document).ready(function() {
        $('.searchCheque').hide();

        $('.propertyselect').hide();
        $('.unitselect').hide();
    });

    $('.searchbtnchq').click(function() {
        $('.searchCheque').show();
    });
</script>