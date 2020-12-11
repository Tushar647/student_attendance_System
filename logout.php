<?php 
if(isset($_GET['user'])) {
    header("Location: index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Panel</title>
<base href="https://colorlib.com/etc/lf/Login_v10/">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100 p-t-50 p-b-90">
<form class="login100-form validate-form flex-sb flex-w">
<span class="login100-form-title p-b-51">
Getting out!
</span>
<div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
<input class="input100" type="text" name="user" placeholder="Username">
</div>
<div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
<input class="input100" type="password" name="pass" placeholder="Password">
</div>
<div class="container-login100-form-btn m-t-17">
<button class="login100-form-btn">
Log Out
</button>
</div>
</form>
</div>
</div>
</div>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>