<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Check</title>
</head>
<body>
    <h1>Student List</h1>
    <?php
    if ($message) {
        echo '<span style="color: green ;">The student "' . $name . '" is present.</span>';
    } else {
        echo '<span style="color: red;">No student named "' . $name . '" is present.</span>';
    }
    ?>
</body>
</html>
