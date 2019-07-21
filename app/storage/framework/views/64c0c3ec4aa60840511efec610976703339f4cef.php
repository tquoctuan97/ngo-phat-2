
<?php
session_start();
?><!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
<html lang="en">

<head>

<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">
  <meta name="author" content="">


  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css'>
<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <!--Add jquery-->
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>


  <title>Ngô Phát</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  

</head>
    </head>
    <body>
    <?php
$link = mysqli_connect("localhost", "root", "", "dunggiang");
  mysqli_set_charset($link,"utf8");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


?>
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-10 col-lg-12 col-md-9">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Đăng nhập!</h1>
              </div>
              <form class="user" method="POST" action="login.php">
                  <div>
                  <input  class="form-control form-control-user" name="username"  placeholder="Tên đăng nhập..."></div>
                  <div style="padding-top: 20px;">
                  <input  type="password" name="password" class="form-control form-control-user" placeholder="Mật khẩu">
                  </div>
                  <div class="form-group">
                  <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                  </div>
                </div>
                <input type = "submit" class="btn btn-primary btn-user btn-block" name="btn_submit" value="Đăng nhập">
                </input>                    
                <?php
                
                if (isset($_POST["btn_submit"])) { 
                // lấy thông tin người dùng 
                  $username = $_POST["username"]; 
                  $password = $_POST["password"]; 
                //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
                //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection 
                  $username = strip_tags($username); 
                  $username = addslashes($username); 
                  $password = strip_tags($password); 
                  $password = addslashes($password); 
                  if ($username == "" || $password =="") { 
                    echo "username hoặc password bạn không được để trống!"; 
                  }else{ 
                    $sql = "select * from user where username = '$username' and password = '$password' "; 
                    
                    $query = mysqli_query($link,$sql); 
                    $num_rows = mysqli_num_rows($query); 
                    if ($num_rows==0) { 
                      echo "Tên đăng nhập hoặc mật khẩu không đúng !"; 
                  }else{ 
                    // Lấy ra thông tin người dùng và lưu vào session 
                    while ( $data = mysqli_fetch_array($query) ) {       
                      //$_SESSION["user_id"] = $data["id"]; 
                      $_SESSION['username'] = $data["username"]; 
                      //$_SESSION["email"] = $data["email"]; 
                      //$_SESSION["fullname"] = $data["fullname"]; 
                     // $_SESSION["is_block"] = $data["is_block"]; 
                      $_SESSION["permision"] = $data["permision"]; }                      
                    // Thực thi hành động sau khi lưu thông tin vào session                 
                    // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php 
                    header('location: index.php'); 
                  } } 
                  } 
                  ?>
</form></div>
                <!--<a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Login with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="register.html">Create an Account!</a>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\ngophat\resources\views/welcome.blade.php ENDPATH**/ ?>