<!DOCTYPE html>
<html>
<head>
    <title>PHP Environment Setup</title>
</head>
<body>
    <h2>Welcome to my PHP Environment</h2>
    <p>
        <?php
            date_default_timezone_set("Asia/Kolkata");
            echo "Server time is: " . date("Y-m-d H:i:s");
        ?>
    </p>
</body>
</html>
