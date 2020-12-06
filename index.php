<!DOCTYPE html>
<?php
    // session_start();
    // $_SESSION['authorized'] = false;
    
    // #example for user & pass
    // $username = 'Nur';
    // $password = 'Ali';
    
    // # if user clicks logout link then remove session and refresh page
    // if(isset($_GET['logout'])){
    //    session_unset();
    //    header('Location:' . $_SERVER["SCRIPT_NAME"]);
    // }

    // #show an error if user enters wrong username and password
    // if(isset($_GET['error'])){
    //    echo '<ul><li>Wrong username - password combination. Try again.</li></ul>';
    // }
    
    // #check if user is not logged in yet
    // if($_SESSION['authorized'] == false){
    
    //     #check if user submitted form
    //     if(isset($_POST['submit'])){
        
    //         #check if user entered right username and password
    //         if($_POST['username'] == $username && $_POST['password'] == $password){
                
    //             #finally set a session to determine if user signed in or not then refresh page
    //             $_SESSION['authorized'] = true;
    //             header('Location:' . $_SERVER["SCRIPT_NAME"]);
    //         } else {
    //             header('Location:' . $_SERVER["SCRIPT_NAME"] . '?error');

    //         }
    //     } 
        
        //#we are still in user is not logged in scope and user did not posted form yet. So lets show user a login form
?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <meta charset="utf-8">
 
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>

<body >

<div class="wrapper">
        <div class="homearrow"></div>
        <p class="homearrowtext"></p>
    </div>


<div class="login-div"></div>

<div class="login-div">
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

