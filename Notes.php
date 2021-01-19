<?php
    session_start();
    require 'conn.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>To Do</title>
    <link href="css/menus.css" rel="stylesheet">
    <link href="css/Profiles.css" rel="stylesheet">
    <link href="css/todostyle.css" rel="stylesheet">
    <link href="css/todos.css" rel="stylesheet">
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

    <div class="animation start-notes"></div>
</nav>

<div class="items">
    <input type="text" placeholder="New item" />
    <button id="note-add-btn">Add</button>
    <ol id="mylist"></ol>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script>
$(function() {
    $("#add").on("click", function() {
        var val = $("input").val();
        if(val !== '') {
            var elem = $("<li></li>").text(val);
            $(elem).append("<button class='rem'>remove</button>");
            $("#mylist").append(elem);
            $("input").val("");
            $(".rem").on("click", function() {
                $(this).parent().remove();
                $("input").focus();
            });
            $("input").focus();
        }
    });
});
</script>
<style>
.items{
    margin-top: 50px;
    margin-left: 500px;
}
.rem {
    margin-left: 5px;
    background-color: white;
    color: red;
    border: 2px;
    cursor: pointer;
}
</style>
</html>