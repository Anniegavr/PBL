<?php
    session_start();
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    require 'conn.php';

    $SQL_QUERRY = "select User_ID from user where Email = '$email' and Password = '$pass'";

    $result = $conn->query($SQL_QUERRY);

    if($result->num_rows > 0){

        $_SESSION["login"] = "yes";
        $row = $result->fetch_assoc();
        $_SESSION["id_user"] = $row["User_ID"];
        
    }

    header("Location: Profile.php");

    die();
    $conn->close();

?>