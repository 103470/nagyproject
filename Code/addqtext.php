<?php

require 'connect.php'; ?>

<?php 
if(isset($_POST['addqt'])){
    $number = $_POST['number'];
    $question = $_POST['question'];
    $con->query("INSERT INTO prediction (question, sn) VALUES ('$question', '$number')");
}

$query = "SELECT * FROM prediction";
$questions = mysqli_query($con,$query);
$total = mysqli_num_rows($questions);
$next = $total + 1;
		
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Kérdőív szerkesztése</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <header>
        <ul>
            <li><a href="addchoice.php">Kérdés hozzáadása</a></li>
            <li><a href="addqtext.php">Predikció hozzáadása</a></li>
            <li><a href="logout.php">Kijelentkezés</a></li>
        </ul>
    </header>
    <main>
    <div class="nagytest">
    <form method="POST" action="addqtext.php">
        <div class="test">
            <br>
                <label>Kérdés száma</label>
                <input type="number" name="number" class="szam" value="<?php echo $next;  ?>">
            <br> 
            <br>
                <label>Kérdés :</label>
                <input type="text" name="question" class="textbox">
            <br>

            <button name="addqt" value="addqt">Hozzáadás</button>
        </div>
    </form>
    </div>

    </main>
    </body>
