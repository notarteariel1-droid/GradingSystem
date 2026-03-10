<!DOCTYPE html>
<html>
<head>
    <title>Scholarship Qualification System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Scholarship Qualification System</h2>

    <form action="process.php" method="POST">
        
        <label>Student Name:</label>
        <input type="text" name="name" required>

        <label>Age:</label>
        <input type="number" name="age" required>

        <label>General Average:</label>
        <input type="number" step="0.01" name="average" required>

        <label>Failing Grade Status:</label>
        <select name="failing" required>
            <option value="">Select</option>
            <option value="0">No Failing</option>
            <option value="1">With Failing</option>
        </select>

        <button type="submit">Evaluate Student</button>
    </form>
</div>

</body>
</html>
