<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example 3</title>
    <?php include_once("../includes/styles.php"); ?>
</head>

<body>
    <h1>Handling Thrown Exceptions</h1>
    <a href="/">Home</a>
    <div>
        <?php
        try {
            $date = new DateTime("Invalid date");
            echo $date->format("Y-m-d");

        } catch (Exception $e) {
            echo "An error ocurred: " . $e->getMessage();
        }
        ?>
    </div>
</body>

</html>