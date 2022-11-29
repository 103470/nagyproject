<?php

require 'connect.php'; 

?>
<?php 
    if(isset($_POST['next'])){
        $number = $_POST['number'];
        $question = $_POST['question'];
        $answer = $_POST['answer'];

        $con->query("INSERT INTO useranswer (question, answer) VALUES ('$question', '$answer')");
        

        $dbresult = $con->query("SELECT count(id) AS total FROM questions"); 
        $num_rows = mysqli_fetch_assoc($dbresult);
        $total_question = $num_rows['total'];


        $next = $number + 1;


        if($number == $total_question){
            header("location: prediction.php?n=1");
        }
        else{
            header("location: index.php?n=". $next);
        }
    

}
    
?>

