<?php include_once("../includes/student.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <?php include_once("../includes/styles.php"); ?>
</head>

<body>
    <h1>OOP</h1>
    <a href="/">Home</a>
    <div>
        <?php
        $student1 = new Student("Daniel", "Guerrero");

        echo $student1->firstName;

        $student1->firstName = "Felipe";

        echo "<br>";

        echo $student1->getFullName();

        $student2 = new Student("Renato", "Teixera");
        $student3 = new Student("Omar", "Rodriguez");
        $student4 = new Student("Murilo", "Mendes");

        $students = [$student1, $student2, $student3];

        array_push($students, $student4);
        ?>

        <ol>
            <?php
            for ($i = 0; $i < count($students); $i++) {
                echo "<li>" . $students[$i]->getFullName() . "</li>";
            }
            ?>
        </ol>
        <ul>
            //for foreach the collection is first then the interative var
            //as == in C#
            <?php
            foreach ($students as $student) {
                echo "<li>" . $student->getFullName() . "</li>";
            }
            ?>
        </ul>
    </div>
</body>

</html>