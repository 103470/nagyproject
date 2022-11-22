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
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Regisztráció</title>
    <link rel="stylesheet"  type="text/css">
    </head>
        <body>

            <div class=>
                <h1 class=>Regisztráció</h1>
                <form action="adduser.php" method="POST" enctype="multipart/form-data">
                    <div class="test">
                    <label>Felhasználónév : </label>
                    <br>
                    <input type="text" name="username" placeholder="Írja be a felhasználónevet" id="reg" required>
                    <br><br>
                    <label>E-mail cím : </label>
                    <br>
                    <input type="email" name="email" placeholder="Írja be az e-mail címet" id="reg" required/>
                    <br><br>
                    <label>Jelszó : </label>
                    <br>
                    <input type="password" name="password" placeholder="Írja be a jelszót" id="reg" required/>
                    <br><br>
                    <label>Jelszó megerősítése : </label>
                    <br>
                    <input type="password" name="password_2" placeholder="Írja be a jelszót újra" id="reg" required/>
                    <br><br>
                    <label>Profilkép : </label>
                    <br>
                    <input type="file" name="image" id="img" required/>
                    <br><br
                    <button type="submit" name="adduser" class="">Hozzáadás</button>
                    <br><br>
                    </div>
                 </form>
            </div>
        </body>


</html>

