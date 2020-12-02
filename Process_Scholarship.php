<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Scholarship</title>
</head>
<body>
    <h2>Process Scholarship</h2>
    <?php
    $firstName = stripslashes($_POST['fname']);
    $lastName = stripslashes($_POST['lname']);
    echo "thank you for filling out the scholarship form, ". 
        $firstName . " " . $lastName;
    ?>
</body>
</html>