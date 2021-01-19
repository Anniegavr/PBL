<?php
    session_start();
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    require 'conn.php';

    $SQL_QUERRY = "select UserId from userstable where UserEmail = '$email' and UserPassword = '$pass'";

    $result = $conn->query($SQL_QUERRY);

    if($result->num_rows > 0){

        $_SESSION["login"] = "yes";
        $row = $result->fetch_assoc();
        $_SESSION["id_user"] = $row["UserId"];
        
    }

    header("Location: Profile.php");

    die();
    $conn->close();

?>