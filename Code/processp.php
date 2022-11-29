<?php 
    require 'connect.php';?>


<?php
if(isset($_POST['next'])){
        $number = $_POST['number'];
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        $con->query("INSERT INTO userprediction (question, answer) VALUES ('$question', '$answer')");
        

        $dbresult = $con->query("SELECT count(id) AS total FROM prediction"); 
        $num_rows = mysqli_fetch_assoc($dbresult);
        $total_question = $num_rows['total'];


        $next = $number + 1;


        if($number == $total_question){
            header("location: final.php");
        }
        else{
            header("location: prediction.php?n=". $next);
        }
    

}

?>
