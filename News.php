<?php
    session_start();
    require 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="css/Profiles.css">
  <link rel="stylesheet" href="css/menus.css">
  <link rel="stylesheet" href="css/new.css">
  <title>News</title>
</head>
<body class="try">

<nav>
<a  href="Profile.php">Profile</a>
  <a href="Timetable.php">Timetable</a>
  <a class ="active" href="News.php">News</a>
  <a href="Calendar.php" >Calendar</a>
   <a  href="../Daniel/To_Do.php">Notes</a>
   <a  href="Flashcards.php">Flashcards</a>

   <?php
        if(isset($_SESSION["login"]) && $_SESSION["login"] == "yes"){
            echo "<a href='Logout.php'>Logout</a>";
        }else{
            echo "<a href='/'>Login</a>";
        }

    ?>
    
    <div class="animation start-news"></div>

    
</nav>


<div class="iframe">
<iframe class="iframe" src="https://utm.md/" width="1000" height="500"></iframe>
</div>

<script src="all.js"></script>
</body>
</html>
