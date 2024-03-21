

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managament</title>
</head>

<body>
<?php 
    // session_start(); 
    // if (!isset($_SESSION['session_id'])){
    //     header('Location: login.php');
    // }
?>
    <?php
        require_once "settings.php";
        $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
        if (!$conn) {
            echo " <p>database Connectinon failed </p>";   
        } else {
            echo "how";
        }
    ?>
</body>

</html>