<?php

require 'connect.php'; ?>

<?php 
if(isset($_POST['adduser'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $password2 = md5($_POST['password_2']);
    $name = $_POST['name'];
    

    if($password == $password2){
        $result = $con->query("SELECT * FROM users WHERE username='$username'");
        if(!($result->num_rows > 0)){
            $result2 = $con->query("SELECT * FROM users WHERE email='$email'");
            if(!($result2->num_rows > 0)){
                $con->query("INSERT INTO users (username, email, password, name) VALUES ('$username', '$email', '$password', '$name')");
                echo "<script>alert('Sikeres hozzáadás!')</script>";
                $username = '';
                $email = '';
                $_POST['password'];
                $_POST['password_2'];
                $name = '';
                
                    
                    
            }
            else{
                echo "<script>alert('Ehez az email címhez már tartozik regisztráció!')</script>";
            }   
            
        }
        else{
            echo "<script>alert('A felhasználónév foglalt!')</script>";
            
        }

    }
    else{
        echo "<script>alert('A jelszavak nem egyeznek!')</script>";
        
    }
}
?>

