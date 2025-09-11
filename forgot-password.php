<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <title>REAL ESTATE | CRM</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.css">

</head>

<body class="hold-transition login-page">

    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <img src="images/fg.png " height="100px">
            </div>
            <div class="card-body">
                <p class="login-box-msg">Forgot your password? </p>
                <form action="reset-password.php" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-info btn-block">Forgot Password </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mt-3 mb-1">
                    <a href="index.php">Login</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/adminlte.min.js"></script>
</body>

</html>