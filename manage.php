

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