<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username === 'admin' && $password === 'SuperSecretPassword123') {
    $_SESSION['loggedin'] = true;
    header("Location: admin_panel.php");
  } else {
    echo "Invalid credentials!";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
</head>
<body>
  <form method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <button type="submit">Login</button>
  </form>
</body>
</html>
