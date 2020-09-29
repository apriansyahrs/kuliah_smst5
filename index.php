<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "koneksi.php";
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sqluser = mysqli_query($con, "select * from tbl_user where username='$user' and password='$pass'");
    $row = mysqli_num_rows($sqluser);

    if ($row > 0) {
        $ruser = mysqli_fetch_assoc($sqluser);

        session_start();
        $_SESSION['namaadmin'] = $ruser['username'];
        $_SESSION['passadmin'] = $ruser['password'];

        echo  "   <script language = 'JavaScript'>
                confirm('Login Berhasil!');
                document.location='Admin';
             </script>  ";
    } else {
        echo    "   <script language = 'JavaScript'>
                        document.location='index.php?pesan=gagal';
                     </script>  ";
    }
}
?>

<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/assets/images/cic.png">
    <title>Sistem Informasi Akademik</title>
    <!-- Custom CSS -->
    <link href="assets/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url(assets/assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box row">
                <div class="col-lg-6 col-md-6 modal-bg-img" style="background-image: url(assets/assets/images/big/login-bg.jpg);">
                </div>
                <div class="col-lg-6 col-md-6 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="assets/assets/images/big/cic.png" width="100%" alt="wrapkit">
                        </div>
                        <h4 class="mt-3 text-center">Univeritas Catur Insan Cendekia</h4>
                        <h3 class="mt-1 text-center"><b>SIAKAD</b></h3>

                        <?php
                        if (isset($_GET['pesan'])) {
                            if ($_GET['pesan'] == "gagal") {
                                echo "<div class='alert alert-danger alert-dismissible bg-danger text-white border-0 fade show' role='alert'>
							  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							  <span aria-hidden='true'>&times;</span>
							  </button> <strong>Username & Password Salah </strong></div>";
                            } else {
                                echo "&nbsp;";
                            }
                        }
                        ?>

                        <form class="mt-4" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="form-control" name="username" type="text" required="" placeholder="enter your username">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="pwd">Password</label>
                                        <input class="form-control" name="password" type="password" required="" placeholder="enter your password">
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <input type="submit" class="btn btn-block btn-primary" value="Sign In">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="assets/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>