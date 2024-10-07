<?php
include "./config.php";

if (isset($_POST['username']) && isset($_POST['pass'])) {
    $uname = $_POST['username'];
    $pass = $_POST['pass'];

    $result = mysqli_query($conn, "SELECT * FROM company WHERE EMAIL='$uname'");
    
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($pass , $user['password'])) { 
            echo "logged in";
        } else {
            echo "incorrect username or password";
        }
    } else {
        echo "incorrect username or password";
    }
}
?>
