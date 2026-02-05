<?php
$conn = mysqli_connect("localhost","root","","ctf");

if(isset($_POST['user'])) {
  $u = $_POST['user'];
  $p = $_POST['pass'];

  $q = "SELECT * FROM users WHERE username='$u' AND password='$p'";
  $r = mysqli_query($conn,$q);

  if(mysqli_num_rows($r) > 0) {
    echo "<script>alert('FLAG{level3_sqli_real}')</script>";
  } else {
    echo "<script>alert('Invalid login')</script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Employee Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="POST" class="login-box">
  <h2>Employee Portal</h2>
  <input name="user" placeholder="Employee ID">
  <input name="pass" type="password" placeholder="Password">
  <button>Login</button>
</form>

</body>
</html>
