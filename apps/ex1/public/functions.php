<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("../includes/styles.php"); ?>
</head>

<body>
    <h1>Functions</h1>
    <a href="/">Home</a>
    <?php
    /**
     * Adds two values
     * @param int|float $x Value 1
     * @param int|float $y Value 2
     * @return float|int The sum of two values
     */
    function add(int|float $x, int|float $y): int|float
    {
        return $x + $y;
    }
    /**
     * Subtracts two values
     * @param int|float $x Value 1
     * @param int|float $y Value 2
     * @return float|int The subtraction of two values
     */
    function subtract(int|float $x, int|float $y): int|float
    {
        return $x - $y;
    }
    /**
     * Multiplies two values
     * @param int|float $x Value 1
     * @param int|float $y Value 2
     * @return float|int The multiplication of two values
     */
    function multiply(int|float $x, int|float $y): int|float
    {
        return $x * $y;
    }
    /**
     * Divides two values
     * @param int|float $x Value 1
     * @param int|float $y Value 2
     * @return float|int The division of two values
     */
    function divide(int|float $x, int|float $y): int|float
    {
        return $x / $y;
    }
    /**
     * Find the modulus of two values
     * @param int|float $x Value 1
     * @param int|float $y Value 2
     * @return float|int The remainder of a division operation
     */
    function modulus(int|float $x, int|float $y): int|float
    {
        return $x % $y;
    }
    ?>
    <div>13 + 5 = <?= add(13, 5) ?></div>
    <div>13 - 5 = <?= subtract(13, 5) ?></div>
    <div>13 * 5 = <?= multiply(13, 5) ?></div>
    <div>12 / 3 = <?= divide(12, 3) ?></div>
    <div>12 mod(%) 5 = <?= modulus(12, 5) ?></div>
    <div>12 / 0 = Throws an exception</div>
    <?php
    //Division by zero throws an error
    //echo divide(12, 0);
    ?>
</body>

</html>