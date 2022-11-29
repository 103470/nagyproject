<?php
    require 'connect.php'; ?>

<?php
    $result = $con->query("SELECT * FROM useranswer");
    $num_rows = mysqli_num_rows($result);

    
    
    $result2 = $con->query("SELECT * FROM userprediction");
    $num_rows2 = mysqli_num_rows($result2);

  

    

    


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Adatok</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <header>
        <ul>
            <li><a href="addchoice.php">Kérdés hozzáadása</a></li>
            <li><a href="addqtext.php">Predikció hozzáadása</a></li>
            <li><a href="logout.php">Kijelentkezés</a></li>
        </ul>
      </header>
    <body>
        <div>
            <table class="styled-table">
                <thead>
                    <th>Kérdés</th>
                    <th>Válasz</th>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['question'] ?></td>
                    <td><?php echo $row['answer'] ?></td>
                </tr>
                <?php endwhile; ?>
                </tbody>


            </table>
            <table class="styled-table">
            <thead>
                    <th>Kérdés</th>
                    <th>Válasz</th>

            </thead>
            <tbody>
            <tr class="active-row">
                <?php while($row = mysqli_fetch_assoc($result2)): ?>
                <tr>
                    <td><?php echo $row['question']; ?> </td>
                    <td><?php echo $row['answer']; ?> </td>
                </tr>
                <?php endwhile; ?>
            </tr>
            </tbody>
            </table>
        </div>
    </body>
</html>
