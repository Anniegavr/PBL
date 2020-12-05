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



<table width=40% >
  <nav>
  <a class ="active" href="index.php">Home</a>
  <a href="Timetable.php">Timetable</a>
  <a href="News.php">News</a>

  <a href="Calendar.php" >Calendar</a>

  <a href="Profile.php">Profile</a>
   <a href="Notes.php">Notes</a>

<div class="animation start-home"></div>

<h1><span class="">Calendar</span></h1>
</nav>

 </ul>


  <thead>
  <tr>
    <td>«</td>
    <th colspan=5> <div id="month">Decembrie</div></th>
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
    <th>29</th>
    <th>30</th>
    <th>1</th>
    <th>1</th>
    <th>3</th>
    <th>4</th>
    <th class="today">5</th>
  </tr>
  <tr>
    <th>6</th>
    <th>7</th>
    <th>8</th>
    <th>9</th>
    <th>10</th>
    <th>11</th>
    <th>12</th>
  </tr>
  <tr>
    <th>13</th>
    <th>14</th>
    <th>15</th>
    <th>16</th>
    <th>17</th>
    <th>18</th>
    <th>19</th>
  </tr>
  <tr>
    <th>20</th>
    <th>21</th>
    <th>22</th>
    <th>23</th>
    <th>24</th>
    <th>25</th>
    <th>26</th>
  </tr>
  <tr>
    <th>27</th>
    <th>28</th>
    <th>29</th>
    <th>30</th>
    <th>31</th>
    <th class="nextdate">1</th>
    <th class="nextdate">2</th>
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
