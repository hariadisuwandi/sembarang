<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Login Sistem Informasi Nilai">
  <meta name="author" content="">
  <meta name="keyword" content="">

  <title>SD INPRES CAMBAYA IV</title>

  <!-- pemanggilan direktory file bootstrap.css -->
  <link href="admin/assets/css/bootstrap.css" rel="stylesheet">
  <!-- pemanggilan direktory file css font-->
  <link href="admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

  <!-- pemanggilan direktori file css custom template -->
  <link href="admin/assets/css/style.css" rel="stylesheet">
  <link href="admin/assets/css/style-responsive.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="assets/css/style-login.css" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <style>
    body {
      background-image: url();
    }
  </style>

  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="intro" class="bg-image shadow-2-strong">
    <div class="mask d-flex align-items-center h-200" style="background-color: rgba(0, 0, 0, 0.63); height:100vh;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-md-8">
            <div id="login-page">
              <div class="container">

              <form class="form-login" method="post" action="proseslogin-guru.php">
                <h2 class="form-login-heading"> <span class="glyphicon glyphicon-lock"></span> LOGIN GURU</h2>
                <center>
                    <h5> </h5>
                </center>
                <div class="login-wrap">
                    <input name="username" id="username" type="input" class="form-control" autocomplete="off" placeholder="Username Guru" required autofocus>
                    <br />
                    <input name="password" id="password" type="password" class="form-control" autocomplete="off" placeholder="Password Guru" required>
                    <br />
                    <button class="btn btn-lg btn-info btn-block" type="submit">Masuk</button>


                    <hr>
                    <div class="login-social-link centered">
                        <p>atau login sebagai</p>
                        <a href="index.php" class="btn btn-danger" type="submit"><i class="fa fa-user"></i> Admin</a>
                        <a href="login.html" class="btn btn-success" type="submit"><i class="fa fa-user"></i> Siswa</a>
                    </div>

                </div>

                <!-- Modal -->
                <!--  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->

            </form>

              </div>
            </div>

            <!-- js placed at the end of the document so the pages load faster -->
            <script src="admin/assets/js/jquery.js"></script>
            <script src="admin/assets/js/bootstrap.min.js"></script>

            <!--BACKSTRETCH-->
            <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
            <script type="text/javascript" src="admin/assets/js/jquery.backstretch.min.js"></script>
            <!-- Pemanggilan Background Login Form-->

            <!-- Vendor JS Files -->
            <script src="assets/vendor/aos/aos.js"></script>
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
            <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
            <script src="assets/vendor/php-email-form/validate.js"></script>
            <script src="assets/vendor/purecounter/purecounter.js"></script>
            <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

            <!-- Template Main JS File -->
            <script src="assets/js/main.js"></script>

            <script>
              $.backstretch("assets/img/bg-login.jpg", {
                speed: 500
              });
            </script>
</body>

</html>