<?php
    session_start();
    require 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Note</title>
    <link rel="stylesheet" href="css/Notes.css">
    <link rel="stylesheet" href="css/menu.css">

</head>
<body class="try">
<div class="wrapper">
    <div class="homearrow"></div>
    <p class="homearrowtext"></p>
</div>


<table width=40% >
    <nav>
<a href="profile.php">Profile</a>
  <a href="Timetable.php">Timetable</a>
  <a href="News.php">News</a>

  <a href="Calendar.php">Calendar</a>
   <a class="active" href="ToDo.php">Notes</a>
        <a class="active" href="Flashcards.php">Flashcards</a>

   <?php
        if(isset($_SESSION["login"]) && $_SESSION["login"] == "yes"){
            echo "<a href='Logout.php'>Logout</a>";
        }else{
            echo "<a href='/'>Login</a>";
        }

    ?>

</table>

<section id="mainSection" >
    <table id="myTable" class="sectiune">
        <tr>
            <th colspan="4" id="mainTitle">Note</th>
        </tr>
        <tr>
            <th>Curs</th>
            <th>Nota</th>
            <th colspan="2">Progres</th>
        </tr>
    </table>
</section>
<script src="Grades.js">
</script>
</body>
</html>
