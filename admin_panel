<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
  header("Location: admin.php");
  exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "File uploaded successfully!";
  } else {
    echo "Error uploading file.";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
</head>
<body>
  <h1>Admin Panel</h1>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload">
    <button type="submit">Upload</button>
  </form>
</body>
</html>
