<?php
include "./config.php";


if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["pass"]) && isset($_POST["cpass"])) {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["pass"];
  $confirmpassword = $_POST["cpass"];



  if ($password != $confirmpassword) {
    header("Location:./");
    exit();
  }

  $password = password_hash($password, PASSWORD_BCRYPT);

  $result = mysqli_query($conn, "SELECT * FROM company WHERE EMAIL='$username'");
  if (mysqli_num_rows($result) > 0) {
    echo "User already exist";
  } else {
    $result  = mysqli_query($conn, "INSERT INTO company (name,email,password) VALUES ('$username','$email','$password' )");
    if ($result) {
      echo "registered sucessfully";
    } else {
      echo "something went wrong";
    }
  }
} else {
  header("Location:./");
  exit();
}
