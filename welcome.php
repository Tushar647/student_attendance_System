<?php 
date_default_timezone_set("Asia/Dhaka");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_attendance";
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_GET['name']) && !empty($_GET['name'])) {

$sql = "INSERT INTO `stu_intro` VALUES ('" . $_GET['name'] . "', '".$_GET['roll']."', '".date("h:i:s a d-M-Y")."', '".$_GET['sub']."')";

  if ($conn->query($sql) === TRUE) {
    header("Location: welcome.php");
  }
} else if (isset($_GET['reset'])) {
  $sql = "DELETE from stu_intro";
  $conn->query($sql);
} else if(isset($_GET['out'])) {
    header("Location: logout.php");
}
$conn->close();
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
Everyday Data
</span>  
<div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
<input class="input100" type="text" name="name" placeholder="Name">
</div>
<div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
<input class="input100" type="text" name="roll" placeholder="Roll">
</div>
<div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
<input class="input100" type="text" name="sub" placeholder="Sub">
</div>

<div class="container-login100-form-btn m-t-17">
<button class="login100-form-btn">
Add
</button>       
<br>
<br>
<br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Roll</th>
        <th>Entry Time</th>
        <th>Sub</th>
      </tr>
    </thead>
    <tbody>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_attendance";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM stu_intro";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<tr>
        <td>".$row["name"]."</td>
        <td>".$row["roll"]."</td>
        <td>".$row["time"]."</td>
        <td>".$row["sub"]."</td>
      </tr>";
    }
}
$conn->close();
?>
    </tbody>
  </table>  
<div class="container-login50-form-btn m-t-17">
  <input name="out" value="true" hidden>
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