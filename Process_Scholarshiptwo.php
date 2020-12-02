<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Scholarship two</title>
</head>
<body>
    <h2>Process Scholarship two</h2>
    <?php
    $errorCount = 0;
    function displayRequired($fieldName) {
        echo "The field \"$fieldName\" is required.<br>\n";
    }
    function validateInput($data, $fieldName) {
       global $errorCount;
       if(empty($data)) {
           displayrequired($firstName);
           ++$errorCount;
           $retval ="";
       } else{
           $retval = trim($data);
           $retval = stripslashes($retval);
       }
       return $retval;
       echo "The field \"$fieldName\" is required,<br>\n";
    }
    function redisplayForm($firstname, $lastName) {
        ?>
        <h2 style="text-align: center">Scholarship Form two</h2>
        <form name="scholarship"
            action = "Proccess_Scholarshiptwo.php" method="post"></form>
            <p>First name: <input type="text" name="fName"
            value ="<?php echo $firstName; ?>"></p>
            <p>Last name: <input type="text" name="lName"
            value="<?php echo $lastName; ?>"></p>
            <p>
            <input type="reset" value="Clear Form">&nbsp;&nbsp;
            <input type="submit"name="submit" value="Send Form">
            </p>
    </form>
    <?php
    }
    $firstName = validateInput($_POST['fname'], "First name");
    $lastName = validateInput($_POST['lname'], "Last name");
    if($errorCount > 0){
        echo "$errorCount errors: Please re-enter the information below.<br>\n";
        redisplayForm($firstName, $lastName);
    } else {
        echo "thank you for filling out the scholarship form, ". 
        $firstName . " " . $lastName;
    }
    ?>
</body>
</html>