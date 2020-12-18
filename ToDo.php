<?php
    session_start();
    require 'conn.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>To Do</title>
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/Profile.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="todostyles.css">
    
    
</head>
<body>
  <div id="app"></div>
  <span class="todotext">To Do</span>
  <script src="todoscripts.js"></script>

<nav>
<a  href="profile.php">Profile</a>
  <a href="Timetable.php">Timetable</a>
  <a href="News.php">News</a>
  <a href="Calendar.php" >Calendar</a>
   <a href="Notes.php">Notes</a>
   <a class="active" href="ToDo.php">To Do</a>
   <?php
        if(isset($_SESSION["login"]) && $_SESSION["login"] == "yes"){
            echo "<a href='Logout.php'>Logout</a>";
        }else{
            echo "<a href='/'>Login</a>";
        }

    ?>
    

    <div class="animation start-todo"></div>
    <h1><span class="todo">To Do</span></h1>
</nav>

<div class="items">
    <input type="text" placeholder="New item" />
    <button id="add">Add</button>
    <ol id="mylist"></ol>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<style>
.items{
    margin-top: 50px;
    margin-left: 500px;
}
.rem {
    margin-left: 5px;
    background-color: white;
    color: red;
    border: 2px;
    cursor: pointer;
}
</style>
</html>
