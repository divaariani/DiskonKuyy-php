<?php
    include 'connect.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = 'INSERT INTO sign VALUE ("'.$username.'","'.$email.'","'.$password.'")';

    $result = mysqli_query($conn, $sql);

    if($result) {
      header('Location: index.php');
    } else {
      echo 'Inserted Failed.';
    }
?>