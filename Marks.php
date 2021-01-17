<?php
    session_start();
    require 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/Profiles.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/Mark.css">
  <title>Marks</title>
</head>
<body class="try">

<nav>
<a  href="Profile.php">Profile</a>
  <a href="Timetable.php">Timetable</a>
  <a href="News.php">News</a>
  <a href="Calendar.php" >Calendar</a>
   <a href="Notes.php">Notes</a>
   <a  class="active"href="Flashcards.php">Flashcards</a>

   <?php
        if(isset($_SESSION["login"]) && $_SESSION["login"] == "yes"){
            echo "<a href='Logout.php'>Logout</a>";
        }else{
            echo "<a href='/'>Login</a>";
        }

    ?>
    
    <div class="animation start-profile"></div>

    
</nav>

<div class="box">
         <h1 class="course"><?php
                $SQL_QUERRY = "SELECT `UserName` FROM `userstable` where `UserId`=".$_SESSION["id_user"];

                $result = $conn->query($SQL_QUERRY);

                if($result->num_rows > 0){
                    $row = $result->fetch_assoc();
                    echo $row["UserName"]; 
                }
            ?></h1>
         
         <ul class="links">
             <li class="rows">
                 <div><?php
                $SQL_QUERRY = "SELECT `ObjectName`, `Midterm1`, `Midterm2`, 'Exam', 'total' FROM `academicperformance` where `User_ID`=".$_SESSION["id_user"];

                $result = $conn->query($SQL_QUERRY);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo "<h1>".$row["ObjectName"]."</h1>"."<h3><br>Midterm 1 <br>".$row["Midterm1"]."<br>Midterm 2<br>".$row["Midterm2"]."</h3>";
                      } 
                }
            ?></div>
                 
             </li>
             <!--<li class="rows row2">
                 <h3>Algebra 2</h3>
                 <a href="">250 skills</a>
             </li>
            -->
         </ul>
</div> 

</body>
<style>
   .box h1 {
  text-align: center;
    margin: 5px 40px;
    text-align: center;
    font-size: 30px;
    color: #10a0b6;
    text-shadow: 2px 2px 4px #000000;
    font-family: 'Cherry Swash', cursive;
}
</style>
</html>
