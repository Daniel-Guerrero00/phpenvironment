<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statments</title>
    <?php include_once("../includes/styles.php"); ?>
</head>

<body>
    <h1>If Statments</h1>
    <a href="/">Home</a>
    <?php
    $x = 5;
    $y = 10;

    if ($x > $y) {
        echo "<div>$x is greater than $y</div>";
    } else {
        echo "<div>$x is not greater than $y</div>";
    }

    if (isset($_GET["value"])) {
        $z = $_GET["value"]; // read a query string parameter called value
    
        if (is_numeric($z)) {
            if ($z > $y && $z > $x) {
                echo "The qs param $z is greater than $x and $y";
            } else {
                echo "The qs param $z is not greater than $x and $y";
            }
        } else {
            echo "<div>The value query string param value $z is not numeric</div>";
        }
    } else {
        echo "<div>The value query string param was not set</div>";
    }
    ?>
</body>

</html>