<?php include('../layout/header.php'); ?>
<!-- Select2 -->
<link rel="stylesheet" href="../assets/select2/css/select2.min.css">
<link rel="stylesheet" href="../assets/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="../assets/icheck-bootstrap/icheck-bootstrap.min.css">
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
                    <h1>User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">User</li>
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
                            <!-- <h3 class="card-title">User Details</h3> -->
                            <span class="float-right">
                                <button class="btn btn-info float-right m-1" data-toggle="modal"
                                    data-target="#modal-user">Add User</button>
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
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>User Name</th>
                                        <th>User Type</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John</td>
                                        <td>Fama@demo.com</td>
                                        <td>454544356</td>
                                        <td>username</td>
                                        <td>Admin</td>
                                        <td>
                                            <button class="btn btn-info" data-toggle="modal"
                                                data-target="#modal-user">Edit</button>
                                            <button class="btn btn-danger" onclick="deleteConf()">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Maria</td>
                                        <td>Fama@demo.com</td>
                                        <td>454544356</td>
                                        <td>username</td>
                                        <td>Manager</td>
                                        <td>
                                            <button class="btn btn-info" data-toggle="modal"
                                                data-target="#modal-user">Edit</button>
                                            <button class="btn btn-danger" onclick="deleteConf()">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Jacob</td>
                                        <td>Fama@demo.com</td>
                                        <td>454544356</td>
                                        <td>username</td>
                                        <td>Finance</td>
                                        <td>
                                            <button class="btn btn-info" data-toggle="modal"
                                                data-target="#modal-user">Edit</button>
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


        <div class="modal fade" id="modal-user">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="javascript:void(0)" id="areaForm">
                        <input type="hidden" name="id" id="area_id">
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="bs-stepper">
                                    <div class="bs-stepper-header" role="tablist">
                                        <!-- your steps here -->
                                        <div class="step" data-target="#logins-part">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                                                <span class="bs-stepper-circle"><i class="fas fa-user"></i></span>
                                                <span class="bs-stepper-label">User Details</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#information-part">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                                                <span class="bs-stepper-circle"><i class="fas fa-user-tag"></i></span>
                                                <span class="bs-stepper-label">Permission</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bs-stepper-content card">
                                        <!-- your steps content here -->
                                        <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Full Name</label>
                                                    <input type="text" class="form-control" id="client_name" placeholder="Full Name">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="text" class="form-control" id="client_name" placeholder="Email">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Phone</label>
                                                    <input type="text" class="form-control" id="client_name" placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">User Name</label>
                                                    <input type="text" class="form-control" id="client_name" placeholder="User Name">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Password</label>
                                                    <input type="text" class="form-control" id="client_name" placeholder="Password">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">User Type</label>
                                                    <select class="form-control select2" name="company_id" id="company_id">
                                                        <option value="">Select User Type</option>
                                                        <option value="1">Admin</option>
                                                        <option value="1">Accountant</option>
                                                        <option value="1">Operations</option>
                                                        <option value="1">Management</option>
                                                        <option value="1">Data Analyst</option>
                                                        <option value="1">Sales</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button class="btn btn-info" onclick="stepper.next()">Next</button>
                                        </div>
                                        <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <ul class="no-bullets">
                                                        <li>
                                                            <div class="icheck-success d-inline">
                                                                <input type="checkbox" id="master" onclick="toggleAllCheckboxes('master', 'masterChild')">
                                                                <label class="labelpermission" for="master">Masters</label>
                                                            </div>
                                                            <ul class="no-bullets">
                                                                <li>
                                                                    <div class="icheck-success d-inline">
                                                                        <input type="checkbox" id="area" class="masterChild">
                                                                        <label class="labelpermission" for="area"> Area
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icheck-success d-inline">
                                                                        <input type="checkbox" id="locality" class="masterChild">
                                                                        <label class="labelpermission" for="locality"> Locality
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icheck-success d-inline">
                                                                        <input type="checkbox" id="propertType" class="masterChild">
                                                                        <label class="labelpermission" for="propertType"> Property Type</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icheck-success d-inline">
                                                                        <input type="checkbox" id="property" class="masterChild">
                                                                        <label class="labelpermission" for="property"> Property</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icheck-success d-inline">
                                                                        <input type="checkbox" id="vendor" class="masterChild">
                                                                        <label class="labelpermission" for="vendor"> Vendor
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icheck-success d-inline">
                                                                        <input type="checkbox" id="bank" class="masterChild">
                                                                        <label class="labelpermission" for="bank"> Bank
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icheck-success d-inline">
                                                                        <input type="checkbox" id="installments" class="masterChild">
                                                                        <label class="labelpermission" for="installments"> Installments</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icheck-success d-inline">
                                                                        <input type="checkbox" id="paymentMode" class="masterChild">
                                                                        <label class="labelpermission" for="paymentMode"> Payment Mode</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icheck-success d-inline">
                                                                        <input type="checkbox" id="nationality" class="masterChild">
                                                                        <label class="labelpermission" for="nationality"> Nationality</label>
                                                                    </div>
                                                                </li>
                                                            </ul>

                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul class="no-bullets">
                                                        <li>
                                                            <div class="icheck-success d-inline">
                                                                <input type="checkbox" id="project" onclick="toggleAllCheckboxes('project', 'projectChild')">
                                                                <label class="labelpermission" for="project"> Projects</label>
                                                            </div>
                                                            <ul class="no-bullets">
                                                                <li>
                                                                    <div class="icheck-success d-inline">
                                                                        <input type="checkbox" id="manageContract" class="projectChild">
                                                                        <label class="labelpermission" for="manageContract"> Manage Contract </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icheck-success d-inline">
                                                                        <input type="checkbox" id="manageAgreement" class="projectChild">
                                                                        <label class="labelpermission" for="manageAgreement"> Manage Agreement </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>

                                                    <ul class="no-bullets">
                                                        <li>
                                                            <div class="icheck-success d-inline">
                                                                <input type="checkbox" id="investment" onclick="toggleAllCheckboxes('investment', 'investmentChild')">
                                                                <label class="labelpermission" for="investment"> Investment</label>
                                                            </div>
                                                            <ul class="no-bullets">
                                                                <li>
                                                                    <div class="icheck-success d-inline">
                                                                        <input type="checkbox" id="manageInvestor" class="investmentChild">
                                                                        <label class="labelpermission" for="manageInvestor"> Manage Investor </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icheck-success d-inline">
                                                                        <input type="checkbox" id="manageInvestment" class="investmentChild">
                                                                        <label class="labelpermission" for="manageInvestment"> Manage Investment </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icheck-success d-inline">
                                                                        <input type="checkbox" id="managePayout" class="investmentChild">
                                                                        <label class="labelpermission" for="managePayout"> Manage Investor Payout </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul class="no-bullets">
                                                        <li>
                                                            <div class="icheck-success d-inline">
                                                                <input type="checkbox" id="finance" onclick="toggleAllCheckboxes('finance', 'financeChild')">
                                                                <label class="labelpermission" for="finance"> Finance</label>
                                                            </div>
                                                            <ul class="no-bullets">
                                                                <li>
                                                                    <div class="icheck-success d-inline">
                                                                        <input type="checkbox" id="chequeClearing" class="financeChild">
                                                                        <label class="labelpermission" for="chequeClearing"> Cheque Clearing </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icheck-success d-inline">
                                                                        <input type="checkbox" id="statement" class="financeChild">
                                                                        <label class="labelpermission" for="statement"> Statement </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>

                                                    <ul class="no-bullets">
                                                        <li>
                                                            <div class="icheck-success d-inline">
                                                                <input type="checkbox" id="user">
                                                                <label class="labelpermission" for="user"> Manage user</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <button class="btn btn-info" onclick="stepper.previous()">Previous</button>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                    <form action="" id="areaImportForm" method="POST" enctype="multipart/form-data">
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
<!-- BS-Stepper -->
<script src="../assets/bs-stepper/js/bs-stepper.min.js"></script>

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["excel"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });

    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function() {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    function toggleAllCheckboxes(parentid, childClass) {

        document.getElementById(parentid).addEventListener('change', function() {
            const itemCheckboxes = document.querySelectorAll('.' + childClass);
            itemCheckboxes.forEach(checkbox => {
                checkbox.checked = this.checked; // Set checked status based on the "Select All" checkbox
            });
        });
    }
</script>