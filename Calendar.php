<?php
    session_start();
    require 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Calendar</title>
  <link rel="stylesheet" href="css/Calendar.css">
  <link rel="script" href="Calendar.js">
  <link rel="stylesheet" href="css/menu.css">

</head>
<body class="try">

<div class="wrapper">
        <div class="homearrow"></div>
        <p class="homearrowtext"></p>
    </div>

  <nav>
  <a href="profile.php">Profile</a>
  <a href="Timetable.php">Timetable</a>
  <a href="News.php">News</a>
  <a class ="active" href="Calendar.php">Calendar</a>
  <a href="Notes.php">Flashcards</a>
   <a href="ToDo.php">Notes</a>
   <?php
        if(isset($_SESSION["login"]) && $_SESSION["login"] == "yes"){
            echo "<a href='Logout.php'>Logout</a>";
        }else{
            echo "<a href='/'>Login</a>";
        }

    ?>
    

    <div class="animation start-calendar"></div>
    <h1><span class="">Calendar</span></h1>
</nav>

<table width=40%>
 </ul>


  <thead>
  <tr>
    <td>«</td>
    <th colspan=5> <div id="month">January</div></th>
    <td>»</td>
  </tr>
  </thead>
  <thead class=day>
  <tr>
    <th>Sun</th>
    <th>Mon</th>
    <th>Tue</th>
    <th>Wed</th>
    <th>Thu</th>
    <th>Fri</th>
    <th>Sat</th>
  </tr>
  </thead>
  <tbody class=daynum id=day>
  <tr>
    <th>27</th>
    <th>28</th>
    <th>29</th>
    <th>30</th>
    <th>31</th>
    <th>1</th>
    <th>2</th>
  </tr>
  <tr>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
    <th>7</th>
    <th>8</th>
    <th>9</th>
  </tr>
  <tr>
    <th  class="today">10</th>
    <th>11</th>
    <th>12</th>
    <th>13</th>
    <th>14</th>
    <th>15</th>
    <th>16</th>
  </tr>
  <tr>
    <th>17</th>
    <th>18</th>
    <th>19</th>
    <th>20</th>
    <th>21</th>
    <th>22</th>
    <th>23</th>
  </tr>
  <tr>
    <th>24</th>
    <th>25</th>
    <th>26</th>
    <th>27</th>
    <th>28</th>
    <th>29</th>
    <th>30</th>
  </tr>
  <tr>
    <th>31</th>
    <th class="nextdate">1</th>
    <th class="nextdate">2</th>
    <th class="nextdate">3</th>
    <th class="nextdate">4</th>
    <th class="nextdate">5</th>
    <th class="nextdate">6</th>
  </tr>
  </tbody>
</table>
<dialog close onclick=this.close()><b>The date today is:</b><br />__________<br /><span></span></dialog>
<br />
<br />
<script type="text/javascript" src="time.js"></script>
<script>
  sp=document.getElementsByTagName('span')
  sp[sp.length-1].innerHTML=new Date() ? new Date().getFullYear() : 'Yet';
</script>
</body>
</html>
