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
        <script type="text/javascript"src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <link href="css/menus.css" rel="stylesheet">
        <link href="css/Flashcards.css" rel="stylesheet">
        <link href="css/Profiles.css" rel="stylesheet">        

    </head>
    <body class="try" onload="onPageLoad()" > 
    <nav>
<a href="Profile.php">Profile</a>
  <a  href="Timetable.php">Timetable</a>
  <a href="News.php">News</a>
  <a href="Calendar.php" >Calendar</a>
   <a href="../Daniel/To_Do.php">Notes</a>
   <a class ="active" href="Flashcards.php">Flashcards</a>

   <?php
        if(isset($_SESSION["login"]) && $_SESSION["login"] == "yes"){
            echo "<a href='Logout.php'>Logout</a>";
        }else{
            echo "<a href='/'>Login</a>";
        }

    ?>
    
    <div class="animation start-study"></div>

</nav>
        <div id="controls" class="box">
            <input type="text" name="topic" id="topic" placeholder="Topic">
            <input type="text" name="question" id="question" placeholder="Question">
            <input type="text" name="answer" id="answer" placeholder="Answer">
            <div id="new">ADD</div>
        </div>
        
        <div id="loaded_cards">
        </div>
        <script >
            $(document).ready(function(){
                $('#new').on('click', function(event){
                    if($('#topic').val() && $('#question').val() && $('#answer').val()){
                        var topic = $("#topic").val().replace(/</g, "&lt;").replace(/>/g, "&gt;"),
                            question = $("#question").val().replace(/</g, "&lt;").replace(/>/g, "&gt;"),
                            answer = $("#answer").val().replace(/</g, "&lt;").replace(/>/g, "&gt;"),
                            newCard = "<div class='card'><i class='close fa fa-window-close-o'></i><h1 class ='topic'>"+topic+"</h1><hr><p class='question'>"+question+"</p><p class='answer'>"+answer+"</p></div>";
                        //$('body').append(newCard);
                    /* $.ajax({
                        url: 'Flash_Note.php',
                        success: function(data) {
                            $('.result').html(data);
                        }
                        });*/
                        $("#loaded_cards").load("Flash_Note.php",{
                            topic: topic,
                            question: question,
                            answer: answer,
                            action: "add"
                        });
                        
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
                   let id = this.parentElement.getAttribute('id');
                   $("#loaded_cards").load("Flash_Note.php",{
                        id: id,
                        action: "delete"
                    });
                    console.log("request sent");
                });
            });


            function onPageLoad(){
                $("#loaded_cards").load("Flash_Note.php",{
                    action: "get"
                });
            }
        </script>
    </body>
</html>