<?php
if (isset($_POST['user'])) {
    $u = $_POST['user'];
    $p = $_POST['pass'];

    // Simulated vulnerable logic
    if (
        strpos($u, "' OR '1'='1") !== false ||
        strpos($p, "' OR '1'='1") !== false
    ) {
        echo "<script>alert('FLAG{level3_sqli_simulated}')</script>";
    } else {
        echo "<script>alert('Invalid credentials')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Employee Login</title>
</head>
<body>

<form method="POST">
  <input name="user" placeholder="Username">
  <input name="pass" type="password">
  <button>Login</button>
</form>

</body>
</html>
