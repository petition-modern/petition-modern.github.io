<!DOCTYPE html>

<html>
    <head>
        <title>Merci</title>
    </head>

    <body style="background-color: bisque;">
        <h1>Merci de votre participation</h1>
        
        <?php 
         $name = $_POST["first_name"];
         $last_name = $_POST["last_name"];
         echo "Signé par " . $name . "&nbsp;" . $last_name;  # the "." is for concatenation and "&nbsp;" is for make a space between two words
        
        ?>

        <?php

        // $sign = $_POST["sign"]; //
        $date = $_POST["date"];
        $lieu = $_POST["lieu"];

        echo "A" .  "&nbsp;" . $lieu . "&nbsp;" . "le" . "&nbsp;" . $date; 
        
        ?>
    </body>