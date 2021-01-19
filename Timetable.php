<?php
    session_start();
    require 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>UTM Buddy</title>
  <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
  <link rel="stylesheet" href="css/timetables.css">
  <link rel="stylesheet" href="css/Profiles.css">
  <link rel="stylesheet" href="css/menus.css">
</head>

<body class="try">

    <nav>
<a href="Profile.php">Profile</a>
  <a class ="active" href="Timetable.php">Timetable</a>
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
    
    <div class="animation start-timetable"></div>

</nav>


<table class="content-table">
  <thead>
    <tr>
      <th align="center">Zi /<br>Pereche</th>
      <th>Luni</th>
      <th>Marti</th>
      <th>Miercuri</th>
      <th>Joi</th>
      <th>Vineri</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td align="center">1</td>
      <td><?php
                $SQL_QUERRY = "SELECT DISTINCT timetables.`ObjectName`,  timetables.`Location` FROM `timetables` WHERE (`WeekType` = 1 OR `WeekType` = 0) AND `Zi` = 'LUN' AND `Timp` = '8:00'";
                $SQL_QUERRI = "SELECT DISTINCT timetables.`ObjectName`,  timetables.`Location` FROM `timetables` WHERE (`WeekType` = 2) AND `Zi` = 'LUN' AND `Timp` = '8:00'";

                $result = $conn->query($SQL_QUERRY);
                $result2 = $conn->query($SQL_QUERRI);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo $row["ObjectName"]."<br>".$row["Location"]."<br>-----<br>";
                      } 
                }
                if($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()) {
                      echo $row["ObjectName"]."<br>".$row["Location"];
                    } 
                }
            ?></td>
      <td><?php
                $SQL_QUERRY = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE (`WeekType` = 1 OR `WeekType` = 0) AND `Zi` = 'MAR' AND `Timp` = '8:00'";
                $SQL_QUERRI = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE (`WeekType` = 2) AND `Zi` = 'MAR' AND `Timp` = '8:00'";

                $result = $conn->query($SQL_QUERRY);
                $result2 = $conn->query($SQL_QUERRI);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo $row["ObjectName"]."<br>".$row["Location"]."<br>-----<br>";
                      } 
                }
                if($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()) {
                      echo $row["ObjectName"]."<br>".$row["Location"];
                    } 
              }
            ?></td>
      <td><?php
                $SQL_QUERRY = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE (`WeekType` = 1 OR `WeekType` = 0) AND `Zi` = 'MER' AND `Timp` = '8:00'";
                $SQL_QUERRI = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE `WeekType` = 2 AND `Zi` = 'MER' AND `Timp` = '8:00'";

                $result = $conn->query($SQL_QUERRY);
                $result2 = $conn->query($SQL_QUERRI);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo $row["ObjectName"]."<br>".$row["Location"]."<br>-----<br>";
                      } 
                }
                if($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()) {
                      echo $row["ObjectName"]."<br>".$row["Location"];
                    } 
              }
            ?></td>
       <td><?php
                $SQL_QUERRY = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE (`WeekType` = 1 OR `WeekType` = 0) AND `Zi` = 'JOI' AND `Timp` = '8:00'";
                $SQL_QUERRI = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE `WeekType` = 2 AND `Zi` = `JOI` AND `Timp` = '8:00'";

                $result = $conn->query($SQL_QUERRY);
                $result2 = $conn->query($SQL_QUERRI);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo $row["ObjectName"]."<br>".$row["Location"]."<br>-----<br>";
                      } 
                }
                if($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()) {
                      echo $row["ObjectName"]."<br>".$row["Location"];
                    } 
              }
            ?></td>
      <td><?php
                $SQL_QUERRY = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE (`WeekType` = 1 OR `WeekType` = 0) AND `Zi` = 'VIN' AND `Timp` = '8:00'";
                $SQL_QUERRI = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE `WeekType` = 2 AND `Zi` = `VIN` AND `Timp` = '8:00'";

                $result = $conn->query($SQL_QUERRY);
                $result2 = $conn->query($SQL_QUERRI);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo $row["ObjectName"]."<br>".$row["Location"]."<br>-----<br>";
                      } 
                }
                if($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()) {
                      echo $row["ObjectName"]."<br>".$row["Location"];
                    } 
              }
            ?></td>
    </tr>
    <tr class="active-row">
      <td align="center">2</td>
      <td><?php
                $SQL_QUERRY = "SELECT DISTINCT timetables.`ObjectName`,  timetables.`Location` FROM `timetables` WHERE (`WeekType` = 1 OR `WeekType` = 0) AND `Zi` = 'LUN' AND `Timp` = '9:45'";
                $SQL_QUERRI = "SELECT DISTINCT timetables.`ObjectName`,  timetables.`Location` FROM `timetables` WHERE (`WeekType` = 2) AND `Zi` = 'LUN' AND `Timp` = '9:45'";

                $result = $conn->query($SQL_QUERRY);
                $result2 = $conn->query($SQL_QUERRI);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo $row["ObjectName"]."<br>".$row["Location"]."<br>-----<br>";
                      } 
                }
                if($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()) {
                      echo $row["ObjectName"]."<br>".$row["Location"];
                    } 
              }
            ?></td>
      <td><?php
                $SQL_QUERRY = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE (`WeekType` = 1 OR `WeekType` = 0) AND `Zi` = 'MAR' AND `Timp` = '9:45'";
                $SQL_QUERRI = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE (`WeekType` = 2) AND `Zi` = 'MAR' AND `Timp` = '9:45'";

                $result = $conn->query($SQL_QUERRY);
                $result2 = $conn->query($SQL_QUERRI);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo $row["ObjectName"]."<br>".$row["Location"]."<br>-----<br>";
                      } 
                }
                if($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()) {
                      echo $row["ObjectName"]."<br>".$row["Location"];
                    } 
              }
            ?></td>
      <td><?php
                $SQL_QUERRY = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE (`WeekType` = 1 OR `WeekType` = 0) AND `Zi` = 'MER' AND `Timp` = '9:45'";
                $SQL_QUERRI = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE `WeekType` = 2 AND `Zi` = 'MER' AND `Timp` = '9:45'";

                $result = $conn->query($SQL_QUERRY);
                $result2 = $conn->query($SQL_QUERRI);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo $row["ObjectName"]."<br>".$row["Location"]."<br>-----<br>";
                      } 
                }
                if($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()) {
                      echo $row["ObjectName"]."<br>".$row["Location"];
                    } 
              }
            ?></td>
       <td><?php
                $SQL_QUERRY = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE (`WeekType` = 1 OR `WeekType` = 0) AND `Zi` = 'JOI' AND `Timp` = '9:45'";
                $SQL_QUERRI = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE `WeekType` = 2 AND `Zi` = `JOI` AND `Timp` = '9:45'";

                $result = $conn->query($SQL_QUERRY);
                $result2 = $conn->query($SQL_QUERRI);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo $row["ObjectName"]."<br>".$row["Location"]."<br>-----<br>";
                      } 
                }
                if($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()) {
                      echo $row["ObjectName"]."<br>".$row["Location"];
                    } 
              }
            ?></td>
      <td><?php
                $SQL_QUERRY = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE (`WeekType` = 1 OR `WeekType` = 0) AND `Zi` = 'VIN' AND `Timp` = '9:45'";
                $SQL_QUERRI = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE `WeekType` = 2 AND `Zi` = `VIN` AND `Timp` = '9:45'";

                $result = $conn->query($SQL_QUERRY);
                $result2 = $conn->query($SQL_QUERRI);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo $row["ObjectName"]."<br>".$row["Location"]."<br>-----<br>";
                      } 
                }
                if($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()) {
                      echo $row["ObjectName"]."<br>".$row["Location"];
                    } 
              }
            ?></td>
    </tr>
    <tr>
      <td align="center">3</td>
      <td><?php
                $SQL_QUERRY = "SELECT DISTINCT timetables.`ObjectName`,  timetables.`Location` FROM `timetables` WHERE (`WeekType` = 1 OR `WeekType` = 0) AND `Zi` = 'LUN' AND `Timp` = '11:30'";
                $SQL_QUERRI = "SELECT DISTINCT timetables.`ObjectName`,  timetables.`Location` FROM `timetables` WHERE (`WeekType` = 2) AND `Zi` = 'LUN' AND `Timp` = '11:30'";

                $result = $conn->query($SQL_QUERRY);
                $result2 = $conn->query($SQL_QUERRI);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo $row["ObjectName"]."<br>".$row["Location"]."<br>-----<br>";
                      } 
                }
                if($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()) {
                      echo $row["ObjectName"]."<br>".$row["Location"];
                    } 
              }
            ?></td>
      <td><?php
                $SQL_QUERRY = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE (`WeekType` = 1 OR `WeekType` = 0) AND `Zi` = 'MAR' AND `Timp` = '11:30'";
                $SQL_QUERRI = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE (`WeekType` = 2) AND `Zi` = 'MAR' AND `Timp` = '11:30'";

                $result = $conn->query($SQL_QUERRY);
                $result2 = $conn->query($SQL_QUERRI);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo $row["ObjectName"]."<br>".$row["Location"]."<br>-----<br>";
                      } 
                }
                if($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()) {
                      echo $row["ObjectName"]."<br>".$row["Location"];
                    } 
              }
            ?></td>
      <td><?php
                $SQL_QUERRY = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE (`WeekType` = 1 OR `WeekType` = 0) AND `Zi` = 'MER' AND `Timp` = '11:30'";
                $SQL_QUERRI = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE `WeekType` = 2 AND `Zi` = 'MER' AND `Timp` = '11:30'";

                $result = $conn->query($SQL_QUERRY);
                $result2 = $conn->query($SQL_QUERRI);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo $row["ObjectName"]."<br>".$row["Location"]."<br>-----<br>";
                      } 
                }
                if($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()) {
                      echo $row["ObjectName"]."<br>".$row["Location"];
                    } 
              }
            ?></td>
       <td><?php
                $SQL_QUERRY = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE (`WeekType` = 1 OR `WeekType` = 0) AND `Zi` = 'JOI' AND `Timp` = '11:30'";
                $SQL_QUERRI = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE `WeekType` = 2 AND `Zi` = `JOI` AND `Timp` = '11:30'";

                $result = $conn->query($SQL_QUERRY);
                $result2 = $conn->query($SQL_QUERRI);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo $row["ObjectName"]."<br>".$row["Location"]."<br>-----<br>";
                      } 
                }
                if($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()) {
                      echo $row["ObjectName"]."<br>".$row["Location"];
                    } 
              }
            ?></td>
      <td><?php
                $SQL_QUERRY = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE (`WeekType` = 1 OR `WeekType` = 0) AND `Zi` = 'VIN' AND `Timp` = '11:30'";
                $SQL_QUERRI = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE `WeekType` = 2 AND `Zi` = `VIN` AND `Timp` = '11:30'";

                $result = $conn->query($SQL_QUERRY);
                $result2 = $conn->query($SQL_QUERRI);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo $row["ObjectName"]."<br>".$row["Location"]."<br>-----<br>";
                      } 
                }
                if($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()) {
                      echo $row["ObjectName"]."<br>".$row["Location"];
                    } 
              }
            ?></td>
    </tr>
    <tr>
      <td align="center">4</td>
      <td><?php
                $SQL_QUERRY = "SELECT DISTINCT timetables.`ObjectName`,  timetables.`Location` FROM `timetables` WHERE (`WeekType` = 1 OR `WeekType` = 0) AND `Zi` = 'LUN' AND `Timp` = '13:00'";
                $SQL_QUERRI = "SELECT DISTINCT timetables.`ObjectName`,  timetables.`Location` FROM `timetables` WHERE (`WeekType` = 2) AND `Zi` = 'LUN' AND `Timp` = '13:00'";

                $result = $conn->query($SQL_QUERRY);
                $result2 = $conn->query($SQL_QUERRI);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo $row["ObjectName"]."<br>".$row["Location"]."<br>-----<br>";
                      } 
                }
                if($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()) {
                      echo $row["ObjectName"]."<br>".$row["Location"];
                    } 
              }
            ?></td>
      <td><?php
                $SQL_QUERRY = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE (`WeekType` = 1 OR `WeekType` = 0) AND `Zi` = 'MAR' AND `Timp` = '13:00'";
                $SQL_QUERRI = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE (`WeekType` = 2) AND `Zi` = 'MAR' AND `Timp` = '13:00'";

                $result = $conn->query($SQL_QUERRY);
                $result2 = $conn->query($SQL_QUERRI);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo $row["ObjectName"]."<br>".$row["Location"]."<br>-----<br>";
                      } 
                }
                if($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()) {
                      echo $row["ObjectName"]."<br>".$row["Location"];
                    } 
              }
            ?></td>
      <td><?php
                $SQL_QUERRY = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE (`WeekType` = 1 OR `WeekType` = 0) AND `Zi` = 'MER' AND `Timp` = '13:00'";
                $SQL_QUERRI = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE `WeekType` = 2 AND `Zi` = 'MER' AND `Timp` = '13:00'";

                $result = $conn->query($SQL_QUERRY);
                $result2 = $conn->query($SQL_QUERRI);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo $row["ObjectName"]."<br>".$row["Location"]."<br>-----<br>";
                      } 
                }
                if($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()) {
                      echo $row["ObjectName"]."<br>".$row["Location"];
                    } 
              }
            ?></td>
       <td><?php
                $SQL_QUERRY = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE (`WeekType` = 1 OR `WeekType` = 0) AND `Zi` = 'JOI' AND `Timp` = '13:00'";
                $SQL_QUERRI = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE `WeekType` = 2 AND `Zi` = `JOI` AND `Timp` = '13:00'";

                $result = $conn->query($SQL_QUERRY);
                $result2 = $conn->query($SQL_QUERRI);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo $row["ObjectName"]."<br>".$row["Location"]."<br>-----<br>";
                      } 
                }
                if($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()) {
                      echo $row["ObjectName"]."<br>".$row["Location"];
                    } 
              }
            ?></td>
      <td><?php
                $SQL_QUERRY = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE (`WeekType` = 1 OR `WeekType` = 0) AND `Zi` = 'VIN' AND `Timp` = '13:00'";
                $SQL_QUERRI = "SELECT DISTINCT timetables.`ObjectName`, timetables.`Location` FROM `timetables` WHERE `WeekType` = 2 AND `Zi` = `VIN` AND `Timp` = '13:00'";

                $result = $conn->query($SQL_QUERRY);
                $result2 = $conn->query($SQL_QUERRI);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo $row["ObjectName"]."<br>".$row["Location"]."<br>-----<br>";
                      } 
                }
                if($result2->num_rows > 0){
                  while($row = $result2->fetch_assoc()) {
                      echo $row["ObjectName"]."<br>".$row["Location"];
                    } 
              }
            ?></td>
    </tr>
  </tbody>
</table>




</body>
</html>
