<?php
    session_start();
    require 'conn.php';


    //echo "<div class='card'><i class='close fa fa-window-close-o'></i><h1 class ='topic'>".$_POST["topic"]."</h1><hr><p class='question'>".$_POST["question"]."</p><p class='answer'>".$_POST["answer"]."</p></div>"
    
    if ($_POST["action"]=="add"){

  
        //echo $_POST["topic"];
        $SQL_QUERRY = "INSERT INTO `flashcards`(`User_ID`, `Topic`, `Question`, `Answer`)  VALUES (".$_SESSION["id_user"].", '".$_POST["topic"]."', '".$_POST["question"]."', '".$_POST["answer"]."');";
        // insert to db , from $_POST
        $result = $conn->query($SQL_QUERRY);
    }
    if ($_POST["action"]=="delete"){

        //echo $_POST["topic"];
        $SQL_QUERRY = "DELETE FROM `flashcards` WHERE `Flashcard_ID`=".$_POST["id"];
        // insert to db , from $_POST
        $result = $conn->query($SQL_QUERRY);
    }
    $SQL_QUERRY = "SELECT `Flashcard_ID`, `Topic`, `Question`, `Answer` FROM `flashcards`";

    $result = $conn->query($SQL_QUERRY);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            echo "<div id='".$row["Flashcard_ID"]."' class='card'><i class='close fa fa-window-close-o'></i><h1 class ='topic'>".$row["Topic"]."</h1><hr><p class='question'>".$row["Question"]."</p><p class='answer'>".$row["Answer"]."</p></div>";
          } 
    }
    //get all from db

    //echo all from db
    // $conn->exec($SQL_QUERRY);
?>