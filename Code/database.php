<?php
    require 'connect.php'; ?>

<?php
    $result = $con->query("SELECT * FROM useranswer");
    $num_rows = mysqli_num_rows($result);

    
    
    $result2 = $con->query("SELECT * FROM userprediction");
    $num_rows2 = mysqli_num_rows($result2);

  

    

    


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Adatok</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <header>
        <ul>
            <li><a href="addchoice.php">Kérdés hozzáadása</a></li>
            <li><a href="addqtext.php">Predikció hozzáadása</a></li>
            <li><a href="logout.php">Kijelentkezés</a></li>
        </ul>
