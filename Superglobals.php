<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobals</title>
</head>
<body>
    <h2>Superglobals</h2>
    <?php
        echo "<h3>Superglobal array \$_SERVER[]</h3>";
        echo "<p>The name of the current script is: ",
            $_SERVER["SCRIPT_NAME"], "<br>";
        echo "This script was executed with the following server software: ",
            $_SERVER["SERVER_SOFTWARE"], "<br>";
        echo "This script was requested with the following server protocol: ",
            $_SERVER["SERVER_PROTOCOL"], "<br>";
        echo "This script is running on the following server name: ",
            $_SERVER["SERVER_NAME"], "<br>";
        echo "This script is running on the following server address: ",
            $_SERVER["SERVER_ADDR"], "<br>";
        echo "This script is running with the following gateway: ",
            $_SERVER["GATEWAY_INTERFACE"], "<br>";
        echo "This script is running with the following request method: ",
            $_SERVER["REQUEST_METHOD"], "<br>";
    ?>
</body>
</html>