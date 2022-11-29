<?php 
require 'connect.php';
$result = $con->query("SELECT * FROM questions");
$total = mysqli_num_rows($result);


?>
<!DOCTYPE html>
<html>
<head>
    <title>Kezdőlap</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <header>
        <ul>
            <li><a href="main.php">Kezdőlap</a></li>
            <li><a href="login.php">Bejelentkezés</a></li>
        </ul>

    </header>

    <main>
            <div class="main">
                <h2>Mennyire vagy jártas a foci világában? </h2>
                <br>
                    Egy felelet választós kérdéssorozatban tesztelheted tudásod.
                <br>
                <ul>
                    <li><strong>Kérdések száma:</strong><?php echo $total; ?> </li>
                    <li><strong>Típus: </strong>Feleletválasztós</li>

                </ul>

                <li><a href="index.php?n=1" class="start">Kitöltés</a><li>

            </div>

    </main>
</body>
</html>
