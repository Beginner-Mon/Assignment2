

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
    <form action="" method = "POST"> 

        <input type="submit" name ="logout" class = "manage_btn"> 
    </form>

    <?php 
        if(isset($_POST['logout'])){
            echo "got button";
        }
    
    ?>

</body>

</html>