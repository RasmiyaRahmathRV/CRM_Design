<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../assets/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Toastr -->
<script src="../assets/toastr/toastr.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.22.5/dist/sweetalert2.all.min.js"></script>


<!-- AdminLTE -->
<script src="../js/adminlte.js"></script>


<script>
    function deleteConf() {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your data has been deleted.",
                    icon: "success"
                });
            }
        });
    }

    function signoutConf() {
        Swal.fire({
            title: "Are you sure?",
            text: "You want to sign out!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, sign out!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "../index.php";
            }
        });
    }
</script>

</body>

</html>