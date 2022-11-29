<?php

require 'connect.php'; ?>

<?php
$number = $_GET['n'];
$qidresult = $con->query("SELECT qid FROM questions WHERE sn = $number");
$qid = 1;
while($row = mysqli_fetch_assoc($qidresult)){
    $qid = $row['qid'];
}
$qresult = $con->query("SELECT * FROM questions WHERE sn = $number");
$question = mysqli_fetch_assoc($qresult);
$choices = $con->query("SELECT * FROM answers WHERE qid = $qid");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Kérdőív</title>
    </head>
    <body>
    <form method="POST" action="process.php" >
        <label><?php echo $question['questions']; ?> </label>
            <ul>
                <?php while($row = mysqli_fetch_array($choices)) { ?>
                <input type="radio" value="<?php echo $row['answer']; ?>"><?php echo $row['answer']; ?>
                <?php } ?>
            <br>
            </ul>

            <input type="hidden" name="number" value="<?php echo $number; ?>">
            <button name="next" value="next">Tovább</button>
        </form>
    </body>
</html>
