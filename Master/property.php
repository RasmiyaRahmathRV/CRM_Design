<?php include('../layout/header.php'); ?>
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
                    <h1>Property</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Property</li>
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
                                    data-target="#modal-Property">Add Property</button>
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
                                        <th>Area</th>
                                        <th>Locality</th>
                                        <th>Property Type</th>
                                        <th>Property Name</th>
                                        <th>Property size</th>
                                        <th>Plot no</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Area 1</td>
                                        <td>Locality 1</td>
                                        <td>Res</td>
                                        <td>Property 1</td>
                                        <td>200 sq.ft</td>
                                        <td>0912</td>
                                        <td>
                                            <button class="btn btn-info" data-toggle="modal"
                                                data-target="#modal-Property">Edit</button>
                                            <button class="btn btn-danger" onclick="deleteConf()">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Area 2</td>
                                        <td>Locality 1</td>
                                        <td>Res</td>
                                        <td>Property 2</td>
                                        <td>200 sq.ft</td>
                                        <td>0912</td>
                                        <td>
                                            <button class="btn btn-info" data-toggle="modal"
                                                data-target="#modal-Property">Edit</button>
                                            <button class="btn btn-danger" onclick="deleteConf()">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Area 1</td>
                                        <td>Locality 2</td>
                                        <td>Res</td>
                                        <td>Property 1</td>
                                        <td>200 sq.ft</td>
                                        <td>0912</td>
                                        <td>
                                            <button class="btn btn-info" data-toggle="modal"
                                                data-target="#modal-Property">Edit</button>
                                            <button class="btn btn-danger" onclick="deleteConf()">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Area 1</td>
                                        <td>Locality 3</td>
                                        <td>Res</td>
                                        <td>Property 1</td>
                                        <td>200 sq.ft</td>
                                        <td>0912</td>
                                        <td>
                                            <button class="btn btn-info" data-toggle="modal"
                                                data-target="#modal-Property">Edit</button>
                                            <button class="btn btn-danger" onclick="deleteConf()">Delete</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Area 2</td>
                                        <td>Locality 3</td>
                                        <td>Res</td>
                                        <td>Property 1</td>
                                        <td>200 sq.ft</td>
                                        <td>0912</td>
                                        <td>
                                            <button class="btn btn-info" data-toggle="modal"
                                                data-target="#modal-Property">Edit</button>
                                            <button class="btn btn-danger" onclick="deleteConf()">Delete</button>
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
                        <h4 class="modal-title">Property</h4>
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
                                        <label>Area</label>
                                        <select class="form-control select2" name="area_id" id="area_id">
                                            <option value="">Select Area</option>
                                            <option value="1">Area 1</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Locality</label>
                                        <select class="form-control select2" name="area_id" id="area_id">
                                            <option value="">Select Locality</option>
                                            <option value="1">Locality 1</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="inputEmail3" class="col-form-label">Property Type</label>
                                        <select class="form-control select2" name="area_id" id="area_id">
                                            <option value="">Select Property Type</option>
                                            <option value="1">Res</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="inputEmail3" class="col-form-label">Property Name</label>
                                        <input type="text" name="Property_name" id="Property_name" class="form-control"
                                            id="inputEmail3" placeholder="Property Name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="inputEmail3" class="col-form-label">Property Size</label>
                                        <input type="text" name="Property_name" id="Property_name" class="form-control"
                                            id="inputEmail3" placeholder="Property Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="inputEmail3" class="col-form-label">Plot No</label>
                                        <input type="text" name="Property_name" id="Property_name" class="form-control"
                                            id="inputEmail3" placeholder="Property Name">
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
</script>