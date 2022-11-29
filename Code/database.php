<?php
    require 'connect.php'; ?>

<?php
    $result = $con->query("SELECT * FROM useranswer");
    $num_rows = mysqli_num_rows($result);

    
    
    $result2 = $con->query("SELECT * FROM userprediction");
    $num_rows2 = mysqli_num_rows($result2);

  

    

    


?>
