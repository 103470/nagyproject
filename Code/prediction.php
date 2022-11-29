<?php 
    require 'connect.php';?>

<?php
    $number = $_GET['n'];
    $qresult = $con->query("SELECT * FROM prediction WHERE sn = $number");
    $question = mysqli_fetch_assoc($qresult);




    
?>
