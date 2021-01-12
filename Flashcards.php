<?php
    session_start();
    require 'conn.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flashcards</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="css/menu.css" rel="stylesheet">
        <link href="css/Flashcards.css" rel="stylesheet">
        <link href="css/Profile.css" rel="stylesheet">        

    </head>
    <body class="try">
    <nav>
<a href="Profile.php">Profile</a>
  <a  href="Timetable.php">Timetable</a>
  <a href="News.php">News</a>
  <a href="Calendar.php" >Calendar</a>
   <a href="Notes.php">Notes</a>
   <a class ="active" href="Flashcards.php">Flashcards</a>

   <?php
        if(isset($_SESSION["login"]) && $_SESSION["login"] == "yes"){
            echo "<a href='Logout.php'>Logout</a>";
        }else{
            echo "<a href='/'>Login</a>";
        }

    ?>
    
    <div class="animation start-timetable"></div>

    <h1><span class="">Flashcards</span></h1>
</nav>
        <div id="controls" class="box">
            <input type="text" name="topic" id="topic" placeholder="Topic">
            <input type="text" name="question" id="question" placeholder="Question">
            <input type="text" name="answer" id="answer" placeholder="Answer">
            <div id="new">ADD</div>
        </div>
        <div class="card">
            <i class="close fa fa-window-close-o"></i>
            <h1 class ="topic">Quick Tip</h1>
            <hr>
            <p class="question">Hover over or tap the gray area below</p>
            <p class="answer">And he answer shows up!<br>Scroll for more tips!</p>
        </div>
        <script >$(document).ready(function(){
    $('#new').on('click', function(event){
        if($('#topic').val() && $('#question').val() && $('#answer').val()){
            var topic = $("#topic").val().replace(/</g, "&lt;").replace(/>/g, "&gt;"),
                question = $("#question").val().replace(/</g, "&lt;").replace(/>/g, "&gt;"),
                answer = $("#answer").val().replace(/</g, "&lt;").replace(/>/g, "&gt;"),
                newCard = "<div class='card'><i class='close fa fa-window-close-o'></i><h1 class ='topic'>"+topic+"</h1><hr><p class='question'>"+question+"</p><p class='answer'>"+answer+"</p></div>";
            $('body').append(newCard);
            if(navigator){
                navigator.vibrate(100);
            }
            $('#topic').val('');
            $('#question').val('');
            $('#answer').val('');
        }
    event.stopPropagation();
    });
    $("body").on('click', '.close', function(event){
        $(this).parent().fadeOut(250, function(){
            if(navigator){
                navigator.vibrate(100);
            }
            $(this).remove();
        });
    event.stopPropagation(); 
    });
});</script>
    </body>
</html>
