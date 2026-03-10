<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $average = $_POST['average'];
    $failing = $_POST['failing'];

    // Scholarship Conditions
    if ($average >= 85 && $age >= 18 && $failing == 0) {
        $result = "Qualified";
        $color = "green";
    } else {
        $result = "Not Qualified";
        $color = "red";
    }

    // SAVE TO DATABASE
    $sql = "INSERT INTO students (name, age, average, failing, result)
            VALUES ('$name', '$age', '$average', '$failing', '$result')";

    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Scholarship Evaluation Result</h2>

    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Age:</strong> <?php echo $age; ?></p>
    <p><strong>General Average:</strong> <?php echo $average; ?></p>

    <h3 style="color: <?php echo $color; ?>;">
        <?php echo $result; ?>
    </h3>

    <a href="index.php">Go Back</a>
</div>

</body>
</html>
