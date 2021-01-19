<?php
    session_start();
    require 'conn.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link href="css/Profiles.css" rel="stylesheet">
    <link href="css/menus.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
</head>
<body>

<nav>
<a class="active" href="Profile.php">Profile</a>
  <a href="Timetable.php">Timetable</a>
  <a href="News.php">News</a>
  <a href="Calendar.php" >Calendar</a>
   <a href="../Daniel/To_Do.php">Notes</a>
   <a href="Flashcards.php">Flashcards</a>

   <?php
        if(isset($_SESSION["login"]) && $_SESSION["login"] == "yes"){
            echo "<a href='Logout.php'>Logout</a>";
        }else{
            echo "<a href='/'>Login</a>";
        }

    ?>

    <div class="animation start-home"></div>
</nav>

<div class="container">
    <div class="b1 box"></div>
    <div class="b2 box"></div>
    <div class="profile">
        <img src="login_bg.jpg">
        <p class="Anonymous">Student Id:
        <?php
            echo $_SESSION["id_user"];
        ?>
        
        
        </p>
    </div>
    <div class="skills">
        <p class="skill">
            <?php
                $SQL_QUERRY = "SELECT `UserName` FROM `userstable` where `UserId`=".$_SESSION["id_user"];

                $result = $conn->query($SQL_QUERRY);

                if($result->num_rows > 0){
                    $row = $result->fetch_assoc();
                    echo $row["UserName"];
                    
                }
            ?>
        
        </p>
        <ul>
            <li>Prezenta</li>
            <li>Laboratoare</li>
            <li>An curent</a></li>
        </ul>
        <div class="html">
            <div class="h"></div>
        </div>
        <div class="css">
            <div class="c"></div>
        </div>
        <div class="js">
            <div class="j"></div>
        </div>


    </div>
    <div class="location">
        <i class="fa fa-map-marker"></i><br>

        <p class="Location"><p class="notele"><a href="Marks.php">Notele</a></p><br></p>
    </div>

</div>
</body>
</html>
