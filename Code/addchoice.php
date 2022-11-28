<?php

require 'connect.php'; ?>

<?php
    if(isset($_POST['addqc'])){
        $qid = rand(1,100);
        $result = $con->query("SELECT * FROM questions WHERE qid = $qid");
        while(mysqli_num_rows($result) > 0){
            ++$qid;
        }
        $sn = $_POST['number'];
        $question = $_POST['question'];
        $choicenum = 4;
        $con->query("INSERT INTO questions (qid, questions, choice, sn) VALUES ('$qid', '$question', '$choicenum', '$sn')");
        
        $choice = array();
        $choice[1] = $_POST['choice1'];
        $choice[2] = $_POST['choice2'];
        $choice[3] = $_POST['choice3'];
        $choice[4] = $_POST['choice4'];

        $count = count($choice);
        for($i=1; $i <= $count; $i++){

        $con->query("INSERT INTO answers (qid, answer) VALUES ('$qid', '$choice[$i]')");
        }


    }

    $query = "SELECT * FROM questions";
		$questions = mysqli_query($con,$query);
		$total = mysqli_num_rows($questions);
		$next = $total + 1;
		


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Kérdőív szerkesztés</title>
        <link rel="stylesheet" type="text/css" href="">
    </head>
    <body>
        <header>
            <p></p>
        </header>

        <main>
            <h2>Kérdés hozzáadása</h2>
            <form method="POST" action="addchoice.php">
                <p>
                    <label>Kérdés száma</label>
                    <input type="number" name="number" value="<?php echo $next;  ?>">
                </p>
                <p>
                    <label>Kérdés :</label>
                    <input type="text" name="question">
                </p>
                <p>
                    <label>Válasz 1 :</label>
                    <input type="text" name="choice1">
                </p>
                <p>
                    <label>Válasz 2 :</label>
                    <input type="text" name="choice2">
                </p>
                <p>
                    <label>Válasz 3 :</label>
                    <input type="text" name="choice3">
                </p>
                <p>
                    <label>Válasz 4 :</label>
                    <input type="text" name="choice4">
                </p>

                <button name="addqc" value="addqc">Hozzáadás</button>
            </form>
        </main>

    </body>
</html>
