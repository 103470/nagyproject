<?php 
    
    require 'connect.php';?>

<?php
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $result = $con->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
        if($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("location: database.php");
        }
        else{
            echo "<script>alert('Hibás felhasználónév vagy jelszó!')</script>";
        }
    }
?>
        
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Bejelentkezés</title>
    <link rel="stylesheet" href="style.css" type="text/css">
        <body>
            <div class="containerlog">
                <h1 class="h1log">Bejelentkezés</h1>
                <form action="login.php" method="POST">
                    <div class="test">
                    <label>Felhasználónév : </label>
                    <br>
                    <input type="text" name="username" placeholder="Írja be a felhasználónevet!" id="log" required>
                    <br><br>
                    <label>Jelszó : </label>
                    <br>
                    <input type="password" name="password" placeholder="Írja be a jelszót!" id="log" required>
                    <br><br>
                    <button type="submit" name="login" class="reglog">Bejelentkezés</button>
                    <br><br>
                    </div>
                </form>
            </div>
        </body>
    </head>
</html>
        
    



