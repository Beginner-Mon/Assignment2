

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managament</title>
</head>

<body>
<?php 
    session_start(); 
    if (!isset($_SESSION['session_id'])){
        header('Location: login.php');
    }

                
    if (isset($_GET['username'])) {
        $username = $_GET['username'];
    }
    if (isset($_GET['password'])) {
        $password = $_GET['password'];
    }
    $str = $username . $password;
    $_SESSION['session_id'] = $str;
    echo "<p>" . md5($str) . "</p>";
                
?>
    <?php
        echo $_SESSION['session_id'];
        require_once "settings.php";
        $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
        if (!$conn) {
            echo " <p>database Connectinon failed </p>";   
        } else {
            echo "how";
        }
    ?>
    <h1 class="manage-title">applicant tables</h1>
    <p><label for=""></label></p>
</body>

</html>