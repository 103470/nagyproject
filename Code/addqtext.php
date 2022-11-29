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
