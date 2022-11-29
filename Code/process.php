<?php

require 'connect.php'; 

?>
<?php 
    if(isset($_POST['next'])){
        $number = $_POST['number'];
        

        $dbresult = $con->query("SELECT count(id) AS total FROM questions"); 
        $num_rows = mysqli_fetch_assoc($dbresult);
        $total_question = $num_rows['total'];


        $next = $number + 1;


        if($number == $total_question){
            header("location: final.php");
        }
        else{
            header("location: index.php?n=". $next);
        }
    

}
    
?>
