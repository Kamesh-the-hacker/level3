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

  <!-- ✅ EMBEDDED CSS -->
  <style>
    * {
      box-sizing: border-box;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: #f4f6f9;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 380px;
      margin: 120px auto;
      background: #ffffff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 18px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #1e293b;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-top: 12px;
      border: 1px solid #cbd5e1;
      border-radius: 4px;
      font-size: 14px;
    }

    button {
      width: 100%;
      margin-top: 18px;
      padding: 10px;
      background: #2563eb;
      border: none;
      color: white;
      font-size: 15px;
      cursor: pointer;
      border-radius: 4px;
    }

    button:hover {
      background: #1e40af;
    }

    .footer {
      text-align: center;
      margin-top: 18px;
      color: #64748b;
      font-size: 13px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Employee Portal</h2>

  <form method="POST">
    <input name="user" placeholder="Employee ID">
    <input name="pass" type="password" placeholder="Password">
    <button>Login</button>
  </form>

  <div class="footer">
    © 2026 Internal Systems
  </div>
</div>

</body>
</html>
