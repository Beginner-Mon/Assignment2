

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/manage.css">
    <title>Managament</title>
</head>

<body>
    <style>
    * {
        margin: 0;
        padding: 0;
    }
    .manage-title {
    font-size: 2em; 
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.manage_form {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.manage_btn {
    margin: auto;
    background: none;
    text-transform: capitalize;
    font-size: 1.1em;
    color: #ffffff;
    border: none;
    cursor: pointer;
}
.manage-content {
    text-align: center;
    font-weight: 500;
    padding: 10px;
    letter-spacing: 1.2px;
    font-size: 3em;
}
@media (max-width: 578px){
    .manage-content {
        font-size: 2em;
    }
    .manage-title {
        font-size: 1.1em;
    }
    .manage__header {
        flex-wrap: wrap;
        gap:10px;
        padding: 10x 0;
        align-items: center;
    }
}
    </style>
<?php 
    session_start(); 
    if (!isset($_SESSION['SSID'])){
        header("location: login.php");
    }
            
    // Set the inactivity time of 15 minutes (900 seconds)
    $inactivity_time = 15 * 60;

    // Check if the last_timestamp is set
    // and last_timestamp is greater then 15 minutes or 9000 seconds
    // then unset $_SESSION variable & destroy session data
    if (isset($_SESSION['last_timestamp']) && (time() - $_SESSION['last_timestamp']) > $inactivity_time) {
        session_unset();
        session_destroy();

        //Redirect user to login page
        
        header("Location: login.php");
        
    }else{
        // Regenerate new session id and delete old one to prevent session fixation attack
        session_regenerate_id(true);

        // Update the last timestamp
        $_SESSION['last_timestamp'] = time();
    }
    function get_username() {
        require_once("settings.php");
      
        $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
        if (!$conn) {
            echo "<p>Connection Failed </p>";
            exit();
        }
        
        $query = "SELECT username FROM Admin WHERE token = '". $_SESSION['SSID']. "' ";

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $username = "";
        
        
            $username = $row['username'];

        mysqli_free_result($result);
        mysqli_close($conn);
        return $username;
    }
?>
    <header class = "manage__header">
        <h1 class="manage-title"><?php echo get_username(); ?></h1>
        <form action="" method = "post" class = "manage_form"> 
        <input type="submit" name ="logout" class = "manage_btn" value = "Log out"> 
        </form>
    </header>
    <h1 class="manage-content">Applicant tables</h1>

    

    <?php 
        if(isset($_POST['logout'])){


            session_unset();
            session_regenerate_id(true);
            session_destroy();

            header("location: login.php");


        }
        
    
    ?>

</body>

</html>