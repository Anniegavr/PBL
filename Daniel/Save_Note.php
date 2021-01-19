<?php
    session_start();
    require 'conn.php';


    //echo "<div class='card'><i class='close fa fa-window-close-o'></i><h1 class ='topic'>".$_POST["topic"]."</h1><hr><p class='question'>".$_POST["question"]."</p><p class='answer'>".$_POST["answer"]."</p></div>"
    
    if ($_POST["action"]=="add"){

        $SQL_QUERRY = "INSERT INTO `notes`(`User_ID`, `Title`, `Text`)  VALUES (".$_SESSION["id_user"].", '".$_POST["title"]."', '".$_POST["body"]."');";
        // insert to db , from $_POST
        $result = $conn->query($SQL_QUERRY);
    }
    if ($_POST["action"]=="delete"){

        $SQL_QUERRY = "DELETE FROM `notes` WHERE `Note_ID`=".$_POST["id"];
        // insert to db , from $_POST
        $result = $conn->query($SQL_QUERRY);
    }
    $SQL_QUERRY = "SELECT `Note_ID`, `Title`, `Text` FROM `notes` where 'User_ID'=".$_SESSION["id_user"];

    $result = $conn->query($SQL_QUERRY);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            echo "<div><div class='note' data-color=''><div class='note-header'>".$row["Title"]."</div><div class='note-body'>".$row["Text"]."</div><div class='note-footer'><button class='note-color-btn note-red' type='button' title='red' aria-label='red' data-color='red'></button><button class='note-color-btn note-orange' type='button' title='orange' aria-label='orange' data-color='orange'></button><button class='note-color-btn note-yellow' type='button' title='yellow' aria-label='yellow' data-color='yellow'></button><button class='note-color-btn note-green' type='button' title='green' aria-label='green' data-color='green'></button><button class='note-color-btn note-blue' type='button' title='blue' aria-label='blue' data-color='blue'></button><button class='note-color-btn note-purple' type='button' title='purple' aria-label='purple' data-color='purple'></button><button class='note-delete-btn' type='button' aria-label='Delete'><i class='fa fa-trash'></i></button></div></div></div>";
          } 
    }
 
?>