

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
    if (isset($_SESSION['SSID'])){
        echo $_SESSION['SSID'];
    }

    if (!isset($_SESSION['last_regeneration'])){
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    } else {
        $interval =  60 * 30;
        if (time() - $_SESSION['last_regeneration'] >= $interval){
            session_regenerate_id(true);
            $_SESSION['last_regeneration'] = time();
        }
    }
             
    // Set the inactivity time of 15 minutes (900 seconds)
$inactivity_time = 1 * 60;

// Check if the last_timestamp is set
// and last_timestamp is greater then 15 minutes or 9000 seconds
// then unset $_SESSION variable & destroy session data
if (isset($_SESSION['last_timestamp']) && (time() - $_SESSION['last_timestamp']) > $inactivity_time) {
    session_unset();
    session_destroy();

    //Redirect user to login page
    header("Location: login.php");
    exit();
  }else{
    // Regenerate new session id and delete old one to prevent session fixation attack
    session_regenerate_id(true);

    // Update the last timestamp
    $_SESSION['last_timestamp'] = time();
  }
?>

    <h1 class="manage-title">Applicant tables</h1>

    <form action="" method = "post"> 


        <input type="submit" name ="logout" class = "manage_btn" value = "Log out"> 
    </form>

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