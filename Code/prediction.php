<?php 
    require 'connect.php';?>

<?php
    $number = $_GET['n'];
    $qresult = $con->query("SELECT * FROM prediction WHERE sn = $number");
    $question = mysqli_fetch_assoc($qresult);




    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Kérdőív</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div class="index">
    <form method="POST" action="processp.php" >
        <h3><label><?php echo $question['question']; ?> </label></h3>
        <input type="hidden" name="question" class="textbox" value="<?php echo $question['question']; ?> ">
            <ul>
                <input type="text" name="answer" class="textbox" required>
            <br>
            </ul>

            <input type="hidden" name="number" value="<?php echo $number; ?>">
            <button name="next" value="next">Tovább</button>
        </form>
        </div>
    </body>
</html>
