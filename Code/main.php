<?php 
require 'connect.php';
$result = $con->query("SELECT * FROM questions");
$total = mysqli_num_rows($result);


?>
