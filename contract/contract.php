<?php include('../layout/header.php'); ?>
<!-- daterange picker -->
<link rel="stylesheet" href="../assets/daterangepicker/daterangepicker.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="../assets/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
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
                    <h1>Contract</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Contract</li>
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
                            <!-- <h3 class="card-title">Contract Details</h3> -->
                            <span class="float-right">
                                <button class="btn btn-info float-right m-1" data-toggle="modal"
                                    data-target="#modal-Contract">Add Contract</button>
                                <button class="btn btn-secondary float-right m-1" data-toggle="modal"
                                    data-target="#modal-import">Import</button>
                            </span>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-striped projects ">
                                <thead>
                                    <tr>
                                        <th style="width: 1%">#</th>
                                        <th>Project</th>
                                        <th>Vendor</th>
                                        <th>Tenant</th>
                                        <th>Bldng</th>
                                        <th>Start</th>
                                        <th>Exp</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#</td>
                                        <td>PRJ00001</td>
                                        <td>Vendor</td>
                                        <td>Tenant</td>
                                        <td>Bldng</td>
                                        <td>Start</td>
                                        <td>Exp</td>
                                        <td>
                                            <span class="badge badge-warning">Pending</span>
                                        </td>
                                        <td>
                                            <!-- <a href="#" class="btn btn-success btn-sm" title="Approve"><i class="fas fa-file-signature"></i></a> -->
                                            <a class="btn btn-primary btn-sm" href="view_contract.php?1" title="view contract"><i class="fas fa-eye"></i></a>
                                            <a class="btn btn-info  btn-sm" data-toggle="modal"
                                                data-target="#modal-Contract" title="edit contract"><i class="fas fa-pencil-alt"></i></a>
                                            <a class="btn btn-danger  btn-sm" onclick="deleteConf()" title="delete"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>PRJ00002</td>
                                        <td>Vendor</td>
                                        <td>Tenant</td>
                                        <td>Bldng</td>
                                        <td>Start</td>
                                        <td>Exp</td>
                                        <td>
                                            <span class="badge badge-success">Approved</span>
                                        </td>
                                        <td>
                                            <a href="contract_documents.php" class="btn btn-warning btn-sm" title="documents"><i class="fas fa-file"></i></a>
                                            <!-- <a href="#" class="btn btn-danger btn-sm" title="Terminate"><i class="fas fa-user-slash"></i></a> -->
                                            <a class="btn btn-primary btn-sm" href="view_contract.php?2" title="view contract"><i class="fas fa-eye"></i></a>
                                            <a class="btn btn-info  btn-sm" data-toggle="modal"
                                                data-target="#modal-Contract" title="edit contract"><i class="fas fa-pencil-alt"></i></a>
                                            <a class="btn btn-danger  btn-sm" onclick="deleteConf()" title="delete"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>PRJ00003</td>
                                        <td>Vendor</td>
                                        <td>Tenant</td>
                                        <td>Bldng</td>
                                        <td>Start</td>
                                        <td>Exp</td>
                                        <td>
                                            <span class="badge badge-info">Processing</span>
                                        </td>
                                        <td>
                                            <a href="contract_documents.php" class="btn btn-warning btn-sm" title="documents"><i class="fas fa-file"></i></a>
                                            <!-- <a href="#" class="btn btn-danger btn-sm" title="Terminate"><i class="fas fa-user-slash"></i></a> -->
                                            <a class="btn btn-primary btn-sm" href="view_contract.php?3" title="view contract"><i class="fas fa-eye"></i></a>
                                            <a class="btn btn-info  btn-sm" data-toggle="modal"
                                                data-target="#modal-Contract" title="edit contract"><i class="fas fa-pencil-alt"></i></a>
                                            <a class="btn btn-danger  btn-sm" onclick="deleteConf()" title="delete"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>PRJ00004</td>
                                        <td>Vendor</td>
                                        <td>Tenant</td>
                                        <td>Bldng</td>
                                        <td>Start</td>
                                        <td>Exp</td>
                                        <td>
                                            <span class="badge badge-danger">Terminated</span>
                                        </td>
                                        <td>
                                            <a href="contract_documents.php" class="btn btn-warning btn-sm" title="documents"><i class="fas fa-file"></i></a>
                                            <!-- <a href="#" class="btn btn-danger btn-sm" title="Terminate"><i class="fas fa-user-slash"></i></a> -->
                                            <a class="btn btn-primary btn-sm" href="view_contract.php?4" title="view contract"><i class="fas fa-eye"></i></a>
                                            <a class="btn btn-info  btn-sm" data-toggle="modal"
                                                data-target="#modal-Contract" title="edit contract"><i class="fas fa-pencil-alt"></i></a>
                                            <a class="btn btn-danger  btn-sm" onclick="deleteConf()" title="delete"><i class="fas fa-trash"></i></a>
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


        <div class="modal fade" id="modal-Contract">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Contract</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="javascript:void(0)" id="ContractForm">
                        <input type="hidden" name="id" id="Contract_id">
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="bs-stepper">
                                    <div class="bs-stepper-header" role="tablist">
                                        <!-- your steps here -->
                                        <div class="step" data-target="#lead-step">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="lead-step" id="lead-step-trigger">
                                                <span class="bs-stepper-circle"><i class="far fa-user"></i></span>
                                                <span class="bs-stepper-label">Lead</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#property-step">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="property-step" id="property-step-trigger">
                                                <span class="bs-stepper-circle"><i class="far fa-building"></i></span>
                                                <span class="bs-stepper-label">Property</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#unit-step">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="unit-step" id="unit-step-trigger">
                                                <span class="bs-stepper-circle"><i class="fas fa-door-open"></i></span>
                                                <span class="bs-stepper-label">Unit</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#contract-step">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="contract-step" id="contract-step-trigger">
                                                <span class="bs-stepper-circle"><i class="fas fa-file-contract"></i></span>
                                                <span class="bs-stepper-label">Contract</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#rental-step">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="rental-step" id="rental-step-trigger">
                                                <span class="bs-stepper-circle"><i class="fas fa-house-user"></i></span>
                                                <span class="bs-stepper-label">Rental</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#otc-step">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="otc-step" id="otc-step-trigger">
                                                <span class="bs-stepper-circle"><i class="fas fa-file-invoice-dollar"></i></span>
                                                <span class="bs-stepper-label">OTC</span>
                                            </button>
                                        </div>
                                        <div class="line"></div>
                                        <div class="step" data-target="#payment-step">
                                            <button type="button" class="step-trigger" role="tab" aria-controls="payment-step" id="payment-step-trigger">
                                                <span class="bs-stepper-circle"><i class="fas fa-dollar-sign"></i></span>
                                                <span class="bs-stepper-label">Payment</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bs-stepper-content card">
                                        <!-- your steps content here -->
                                        <div id="lead-step" class="content" role="tabpanel" aria-labelledby="lead-step-trigger">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Company</label>
                                                    <select class="form-control select2" name="company_id" id="company_id">
                                                        <option value="">Select Company</option>
                                                        <option value="1">Fama real estate</option>
                                                        <option value="1">W&B</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Contract Type</label>
                                                    <select class="form-control select2" name="contract_type" id="contract_type">
                                                        <option value="df">DF</option>
                                                        <option value="ff">FF</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Name</label>
                                                    <input type="text" class="form-control" value="Faateh" id="client_name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Phone</label>
                                                    <input type="text" class="form-control" value="0568856995" id="client_phone" placeholder="Phone">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="text" class="form-control" value="adil@faateh.ae" id="client_email" placeholder="Email">
                                                </div>

                                                <div class="col-md-4">
                                                    <label>Vendor</label>
                                                    <select class="form-control select2" name="company_id" id="company_id">
                                                        <option value="">Select Vendor</option>
                                                        <option value="1">Vendor 1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Contact Person</label>
                                                    <input type="text" class="form-control" value="Adil" id="contact_person" placeholder="Contact Person">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Agent</label>
                                                    <select class="form-control select2" name="agent" id="agent">
                                                        <option value="">Select Agent</option>
                                                        <option value="1">Agent 1</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Address</label>
                                                    <textarea name="" class="form-control" id="client_address"></textarea>
                                                </div>
                                            </div>
                                            <button class="btn btn-info" onclick="stepper.next()">Next</button>
                                        </div>
                                        <div id="property-step" class="content" role="tabpanel" aria-labelledby="property-step-trigger">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Area</label>
                                                    <select class="form-control select2" name="area_id" id="area_id">
                                                        <option value="">Select Area</option>
                                                        <option value="1">Area 1</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Locality</label>
                                                    <select class="form-control select2" name="locality_id" id="locality_id">
                                                        <option value="">Select Locality</option>
                                                        <option value="1">Locality 1</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Property</label>
                                                    <select class="form-control select2" name="property_id" id="property_id">
                                                        <option value="">Select Property</option>
                                                        <option value="1">Property 1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">No. of Units</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="No. of Units">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Property type</label>
                                                    <select class="form-control select2" name="property_type" id="property_type">
                                                        <option value="">Select Property</option>
                                                        <option value="1">Property 1</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Grace period</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Grace period">

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Closing Date</label>
                                                    <div class="input-group date" id="closingdate" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" data-target="#closingdate" placeholder="dd-mm-YYYY" />
                                                        <div class="input-group-append" data-target="#closingdate" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <button class="btn btn-info" onclick="stepper.previous()">Previous</button>
                                            <button class="btn btn-info" onclick="stepper.next()">Next</button>
                                        </div>
                                        <div id="unit-step" class="content" role="tabpanel" aria-labelledby="unit-step-trigger">
                                            <div class="form-group">
                                                <div class="col-md-4 mt-4">
                                                    <div class="icheck-success d-inline">
                                                        <input type="checkbox" id="fullBuilding" class="fullBuildCheck" value="1">
                                                        <label class="labelpermission" for="fullBuilding"> Full Building </label>
                                                    </div>

                                                    <div class="icheck-success d-inline">
                                                        <input type="checkbox" id="btob" class="btobcheck" value="1">
                                                        <label class="labelpermission" for="btob"> B2B </label>
                                                    </div>

                                                    <div class="icheck-success d-inline">
                                                        <input type="checkbox" id="btoc" class="btoccheck" value="1">
                                                        <label class="labelpermission" for="btoc"> B2C </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="normalBuilding">
                                                <div id="append-div">
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <label class="control-label">Unit No</label>
                                                            <input type="text" name="unit_no[]" class="form-control" placeholder="Unit No">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class="control-label">Unit Type</label>
                                                            <select class="form-control select2" name="unit_type[]" id="unit_type0">
                                                                <option value="">Unit Type</option>
                                                                <option value="1">1BHK</option>
                                                                <option value="2">2BHK</option>
                                                                <option value="3">3BHK</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <label class="control-label">Floor No</label>
                                                            <input type="text" name="floor_no[]" class="form-control" placeholder="Floor No">
                                                        </div>

                                                        <div class="col-sm-2">
                                                            <label>Unit Status</label>
                                                            <select class="form-control select2" name="unit_status[]" id="unit_status">
                                                                <option value="">Unit Status</option>
                                                                <option value="1">Furnished</option>
                                                                <option value="1">Un furnished</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-sm-2">
                                                            <label class="control-label">Unit Rent Per Annum</label>
                                                            <input type="number" name="unit_rent_per_annum[]" class="form-control" placeholder="Unit Rent Per Annum">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="control-label">Unit Size</label>
                                                            <div class="input-group input-group">
                                                                <div class="input-group-prepend select2">
                                                                    <select name="" id="">
                                                                        <option value="">Sq.ft</option>
                                                                        <option value="">Sq.m</option>
                                                                    </select>
                                                                </div>
                                                                <!-- /btn-group -->
                                                                <input type="number" name="unit_size[]" class="form-control" placeholder="Unit Size">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-3">
                                                            <div class="icheck-success d-inline">
                                                                <input type="checkbox" id="partition" class="partcheck" value="1">
                                                                <label class="labelpermission" for="partition"> Partition </label>
                                                            </div>
                                                            <div class="icheck-success d-inline">
                                                                <input type="checkbox" id="bedspace" class="bedcheck" value="1">
                                                                <label class="labelpermission" for="bedspace"> Bedspace </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2" id="part">
                                                            <label class="control-label">Total Partitions</label>
                                                            <input type="text" name="total_partition[]" class="form-control" placeholder="Total Partitions">
                                                        </div>
                                                        <div class="col-sm-2" id="bs">
                                                            <label class="control-label">Total Bed Spaces</label>
                                                            <input type="text" name="total_bedspace[]" class="form-control" placeholder="Total Bed Spaces">
                                                        </div>
                                                        <div class="col-sm-2" id="subrnt">
                                                            <label class="control-label">Rent per P/BS</label>
                                                            <input type="text" name="rent_per_subunit[]" class="form-control" placeholder="Rent per subunit">
                                                        </div>

                                                    </div>
                                                    <hr>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <button type="button" class=" btn btn-success" title="Add more" id="add-more"> Add more <i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fullBuilding">
                                                <div id="append-div-fullb">
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <label class="control-label">Unit Type</label>
                                                            <select class="form-control select2" name="unit_type[]" id="unit_type0">
                                                                <option value="">Unit Type</option>
                                                                <option value="1">1BHK</option>
                                                                <option value="2">2BHK</option>
                                                                <option value="3">3BHK</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-sm-2">
                                                            <label class="control-label">Unit Count</label>
                                                            <input type="text" name="unit_count[]" class="form-control" placeholder="Unit Count">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <button type="button" class=" btn btn-success" title="Add more" id="add-more-fullBuilding"> Add more <i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <button class="btn btn-info" onclick="stepper.previous()">Previous</button>
                                            <button class="btn btn-info" onclick="stepper.next()">Next</button>
                                        </div>
                                        <div id="contract-step" class="content" role="tabpanel" aria-labelledby="contract-step-trigger">
                                            <div class="form-group row">
                                                <div class="col-md-2">
                                                    <label for="exampleInputEmail1">Contract fee</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contract fee">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="exampleInputEmail1">Start Date</label>
                                                    <div class="input-group date" id="startdate" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" data-target="#startdate" placeholder="dd-mm-YYYY" />
                                                        <div class="input-group-append" data-target="#startdate" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="exampleInputEmail1">Duration in Months</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Duration in Months">
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="exampleInputEmail1">Duration in Days</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Duration in Days">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="exampleInputEmail1">End Date</label>
                                                    <div class="input-group date" id="enddate" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" data-target="#enddate" placeholder="dd-mm-YYYY" />
                                                        <div class="input-group-append" data-target="#enddate" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-info" onclick="stepper.previous()">Previous</button>
                                            <button class="btn btn-info" onclick="stepper.next()">Next</button>
                                        </div>
                                        <div id="rental-step" class="content" role="tabpanel" aria-labelledby="rental-step-trigger">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Rent per annum</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Rent per annum">
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="exampleInputEmail1">Commission %</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Commission %">
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="exampleInputEmail1">Commission</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Commission" readonly>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="exampleInputEmail1">Deposit %</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Deposit %">
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="exampleInputEmail1">Deposit</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Deposit" readonly>
                                                </div>
                                            </div>
                                            <button class="btn btn-info" onclick="stepper.previous()">Previous</button>
                                            <button class="btn btn-info" onclick="stepper.next()">Next</button>
                                        </div>
                                        <div id="otc-step" class="content" role="tabpanel" aria-labelledby="otc-step-trigger">
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <label for="exampleInputEmail1">Cost of Development</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cost of Development">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="exampleInputEmail1">Cost of Beds</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cost of Beds">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="exampleInputEmail1">Cost of Mattress</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cost of Mattress">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="exampleInputEmail1">Appliances</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Appliances">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <label for="exampleInputEmail1">Decoration</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Decoration">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="exampleInputEmail1">Dewa Deposit</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Dewa Deposit">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="exampleInputEmail1">Ejari</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ejari">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="exampleInputEmail1">Cost of Cabinets</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cost of Cabinets">
                                                </div>
                                            </div>
                                            <button class="btn btn-info" onclick="stepper.previous()">Previous</button>
                                            <button class="btn btn-info" onclick="stepper.next()">Next</button>
                                        </div>
                                        <div id="payment-step" class="content" role="tabpanel" aria-labelledby="payment-step-trigger">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Payment Mode</label>
                                                    <select class="form-control select2" name="payment_mode" id="payment_mode">
                                                        <option value="">Select</option>
                                                        <option value="1">Cash</option>
                                                        <option value="bank">Bank Transfer</option>
                                                        <option value="chq">Cheque</option>
                                                        <option value="cc">Credit card</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">No. of Instalments</label>
                                                    <select class="form-control select2" name="company_id" id="company_id">
                                                        <option value="">Select</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Interval</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Interval" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">First Payment Date</label>
                                                    <div class="input-group date" id="firstpaymntdate" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" data-target="#firstpaymntdate" placeholder="dd-mm-YYYY" />
                                                        <div class="input-group-append" data-target="#firstpaymntdate" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Payment Amount</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Payment Amount">
                                                </div>


                                                <div class="col-md-4">
                                                    <label for="exampleInputEmail1">Beneficiary</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Beneficiary">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4 bank">
                                                    <label for="exampleInputEmail1">Bank Name</label>
                                                    <select class="form-control select2" name="company_id" id="company_id">
                                                        <option value="">Select bank</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-3 chq">
                                                    <label for="exampleInputEmail1">Cheque No</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cheque No">
                                                </div>

                                                <div class="col-md-3 chq">
                                                    <label for="exampleInputEmail1">Cheque Issuer</label>
                                                    <select class="form-control select2" name="cheque_issuer" id="cheque_issuer">
                                                        <option value="">Select</option>
                                                        <option value="self">Self</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-3 chqot">
                                                    <label for="exampleInputEmail1">Cheque Issuer Name</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cheque Issuer Name">
                                                </div>

                                                <div class="col-md-3 chqot">
                                                    <label for="exampleInputEmail1">Issuer ID</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Issuer ID">
                                                </div>
                                            </div>
                                            <button class="btn btn-info" onclick="stepper.previous()">Previous</button>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="modal-footer justify-content-between">
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info">Save changes</button> -->
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
                    <form action="" id="ContractImportForm" method="POST" enctype="multipart/form-data">
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
    $('#closingdate').datetimepicker({
        format: 'DD-MM-YYYY'
    });

    $('#startdate').datetimepicker({
        format: 'DD-MM-YYYY'
    });

    $('#enddate').datetimepicker({
        format: 'DD-MM-YYYY'
    });

    $('#firstpaymntdate').datetimepicker({
        format: 'DD-MM-YYYY'
    });

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
</script>

<script>
    $(document).ready(function() {
        const container = document.getElementById('append-div');
        const addMoreBtn = document.getElementById('add-more');



        // Function to attach events for toggle + remove
        function attachEvents(block) {
            const check1 = block.querySelector('.partcheck');
            const check2 = block.querySelector('.bedcheck');
            const part = block.querySelector('.part');
            const bs = block.querySelector('.bs');
            const subrnt = block.querySelector('.subrnt');


            part.style.display = 'none';
            bs.style.display = 'none';
            subrnt.style.display = 'none';


            function toggleSubrnt() {
                if (check1.checked || check2.checked) {
                    subrnt.style.display = 'block';
                } else {
                    subrnt.style.display = 'none';
                }
            }
            // // Checkbox toggle
            check1.addEventListener('change', () => {
                part.style.display = check1.checked ? 'block' : 'none';
                toggleSubrnt();
            });

            check2.addEventListener('change', () => {
                bs.style.display = check2.checked ? 'block' : 'none';
                toggleSubrnt();
            });

            // Remove button
            const removeBtn = block.querySelector('.dlt-div');
            if (removeBtn) {
                removeBtn.addEventListener('click', () => {
                    block.remove();
                });
            }
        }


        // Add new block dynamically
        var i = 0;
        addMoreBtn.addEventListener('click', () => {
            i++;
            const newBlock = document.createElement('div');
            newBlock.classList.add('apdi');
            newBlock.innerHTML = '<div class="form-group row">' +
                '<div class="col-sm-2 add-morecol2"><label class="control-label"> Unit No </label>' +
                '<input type="text" name="l_name[]" class="form-control" placeholder="Unit No"></div>' +
                '<div class="col-sm-2 add-morecol2"><label class="control-label"> Unit Type </label>' +
                '<select class="form-control select2" name="unit_type[]" id="unit_type">' +
                '<option value="">Select</option>' +
                '<option value="1">1BHK</option>' +
                '<option value="2">2BHK</option>' +
                '<option value="3">3BHK</option>' +
                '</select></div>' +
                '<div class="col-sm-1 add-morecol2">' +
                '<label class="control-label"> Floor No </label>' +
                '<input type="text" name="l_name[]" class="form-control" placeholder="Floor No">' +
                '</div>' +
                '<div class="col-sm-2 add-morecol2">' +
                '<label class="control-label"> Unit Status </label>' +
                '<select class="form-control select2" name="unit_status[]" id="company_id">' +
                '<option value="">Unit Status</option>' +
                '<option value="1">Company 1</option>' +
                '</select>' +
                '</div>' +
                '<div class="col-sm-2 add-morecol2">' +
                '<label class="control-label"> Unit Rent Per Annum </label>' +
                '<input type="number" name="email1[]" class="form-control" placeholder="Unit Rent Per Annum">' +
                '</div>' +
                '<div class="col-sm-3 add-morecol2">' +
                '<label class="control-label">Unit Size</label>' +
                '<div class="input-group input-group">' +
                '<div class="input-group-prepend select2">' +
                '<select name="" id="">' +
                '<option value="">Sq.ft</option>' +
                '<option value="">Sq.m</option>' +
                '</select>' +
                '</div>' +
                '<input type="number" name="unit_size[]" class="form-control" placeholder="Unit Size">' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="form-group row">' +
                '<div class="col-sm-3">' +
                '<div class="icheck-success d-inline">' +
                '<input type="checkbox" id="partition' + i + '" class="partcheck" value="1">' +
                '<label class="labelpermission" for="partition' + i + '"> Partition </label>' +
                '</div>' +
                '<div class="icheck-success d-inline">' +
                '<input type="checkbox" id="bedspace' + i + '" class="bedcheck" value="1">' +
                '<label class="labelpermission" for="bedspace' + i + '"> Bedspace </label>' +
                '</div>' +
                '</div>' +
                '<div class="col-sm-2 part">' +
                '<label class="control-label">Total Partitions</label>' +
                '<input type="text" name="total_partition[]" class="form-control" placeholder="Total Partitions">' +
                '</div>' +
                '<div class="col-sm-2 bs">' +
                '<label class="control-label">Total Bed Spaces</label>' +
                '<input type="text" name="total_bedspace[]" class="form-control" placeholder="Total Bed Spaces">' +
                '</div>' +
                '<div class="col-sm-2 subrnt">' +
                '<label class="control-label">Rent per P/BS</label>' +
                '<input type="text" name="rent_per_subunit[]" class="form-control" placeholder="Rent per subunit">' +
                '</div>' +
                '</div>' +
                '<div class="col-sm-1">' +
                '<button type="button" class=" btn-danger btn-block dlt-div btndetd pdd" title="Delete" data-toggle="tooltip">' +
                '<i class="fa fa-trash fa-1x"></i></button>' +
                '</div><hr></div>';
            container.appendChild(newBlock);
            attachEvents(newBlock);
        });


        container.querySelectorAll('.apdi').forEach(attachEvents);
    });
</script>

<script>
    $(document).ready(function() {
        const check11 = document.getElementById('partition');
        const check22 = document.getElementById('bedspace');
        const part1 = document.getElementById('part');
        const bs1 = document.getElementById('bs');
        const subrnt1 = document.getElementById('subrnt');


        part1.style.display = 'none';
        bs1.style.display = 'none';
        subrnt1.style.display = 'none';


        function toggleSubrnt() {
            if (check11.checked || check22.checked) {
                subrnt1.style.display = 'block';
            } else {
                subrnt1.style.display = 'none';
            }
        }
        // // Checkbox toggle
        check11.addEventListener('change', () => {
            part1.style.display = check11.checked ? 'block' : 'none';
            toggleSubrnt();
        });

        check22.addEventListener('change', () => {
            bs1.style.display = check22.checked ? 'block' : 'none';
            toggleSubrnt();
        });

        $('.bank').hide();
        $('.chq').hide();
        $('.chqot').hide();
        $('.part0').hide();
        $('.bs0').hide();
        $('.subrnt0').hide();

        $('.fullBuilding').hide();
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

    $('#cheque_issuer').change(function() {
        var cheque_issuer = $(this).val();
        if (cheque_issuer == 'other') {
            $('.chqot').show();
        } else {
            $('.chqot').hide();
        }
    });

    $('#contract_type').change(function() {
        var contract_type = $(this).val();
        if (contract_type == 'ff') {
            $('#client_name').val('Faateh');
            $('#client_phone').val('0568856995');
            $('#client_email').val('adil@faateh.ae');
            $('#contact_person').val('Adil');

        } else {
            $('#client_name').val('Faateh');
            $('#client_phone').val('0568856995');
            $('#client_email').val('adil@faateh.ae');
            $('#contact_person').val('Adil');
        }
    });



    $('.fullBuildCheck').click(function() {
        if ($(this).prop('checked')) {
            $('.fullBuilding').show();
            $('.normalBuilding').hide();
        } else {
            $('.fullBuilding').hide();
            $('.normalBuilding').show();
        }
    });
</script>

<script>
    $(document).ready(function() {
        const container = document.getElementById('append-div-fullb');
        const addMoreBtn = document.getElementById('add-more-fullBuilding');


        // Function to attach events for toggle + remove
        function attachEvents(block) {

            // Remove button
            const removeBtn = block.querySelector('.dlt-div-fullb');
            if (removeBtn) {
                removeBtn.addEventListener('click', () => {
                    block.remove();
                });
            }
        }


        // Add new block dynamically
        addMoreBtn.addEventListener('click', () => {
            const newBlock = document.createElement('div');
            newBlock.classList.add('add-more-fullBuilding');
            newBlock.innerHTML = '<div class="form-group row">' +
                '<div class="col-sm-2">' +
                '<label class="control-label">Unit Type</label>' +
                '<select class="form-control select2" name="unit_type[]" id="unit_type">' +
                '<option value="">Unit Type</option>' +
                '<option value="1">1BHK</option>' +
                '<option value="2">2BHK</option>' +
                '<option value="3">3BHK</option>' +
                '</select>' +
                '</div>' +
                '<div class="col-sm-2">' +
                '<label class="control-label">Unit Count</label>' +
                '<input type="text" name="unit_count[]" class="form-control" placeholder="Unit Count">' +
                '</div>' +
                '<div class="col-sm-1">' +
                '<button type="button" class=" btn-danger btn-block dlt-div-fullb btndetd fullbdel" title="Delete" data-toggle="tooltip">' +
                '<i class="fa fa-trash fa-1x"></i></button>' +
                '</div><hr></div>';
            container.appendChild(newBlock);
            attachEvents(newBlock);
        });


        container.querySelectorAll('.add-more-fullBuilding').forEach(attachEvents);
    });
</script>

<script>
    const btob = document.getElementById("btob");
    const btoc = document.getElementById("btoc");

    btob.addEventListener("change", () => {
        if (btob.checked) btoc.checked = false;
    });

    btoc.addEventListener("change", () => {
        if (btoc.checked) btob.checked = false;
    });
</script>