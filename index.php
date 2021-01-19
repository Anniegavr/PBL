<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
    <meta charset="utf-8" />
    
    <link rel="stylesheet" href="css/Profiles.css">
    <link href="css/menus.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <meta charset="utf-8">
 
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>

<body >

<nav>
<a href="Profile.php">Profile</a>
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
    
    <div class="animation start-login"></div>
    
</nav>


<div class="login-div"></div>

<div class="log-elements">
  <div  class="logo"></div>
  <div class="title">UTM Buddy</div>
  <div class="sub-title"></div>
  
  <form action="login.php" method="POST" enctype="multipart/form-data">
    <div class="fields">
      <div class="username"><input name="email" type="username" class="user-input" placeholder="ID or Email" /></div>
      <div class="password"><input name="pass" type="password" class="pass-input" placeholder="password" /></div>
    </div>
    <a href="Profile.php"><input class="button signin-button" type="submit" name="submit" value="Login"></a>
  </form>
  <div class="link">
    <a href="#">Forgot password?</a> or <a href="#">Sign up</a>
  </div>
</div>
            
<body>
</body>
</html>

