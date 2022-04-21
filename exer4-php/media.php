<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>t</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<h1>Mauricio Costa</h1>
    <div class="form">
        <form action="media.php" method="post">
            <fieldset>
                <legend>Média</legend>
                <input type="number" name="number_1">
                <input type="number" name="number_2">
                <input type="submit" value="calcular">
            </fieldset>
        </form>
    </div>
    <?php
        $mark1=$_POST["number_1"];
        $mark2=$_POST["number_2"];
        $average=(($mark1*2)+($mark2*3))/5;
        
        echo "<p>a media ponderada é = $average</p>";
    ?>
</body>
</html>