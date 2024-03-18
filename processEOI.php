<?php
    function processing_id($a) {
        if isset($a) {
            $a = htmlspecialchars($a);
            $a = trim($a);
            $a = sanitise_input($a)
            return $a;
        } else {
            header("location: apply.html");

        }
        
    }
    require_once("settings.php");
    $conn = @mysqli_connect($host, $user, $sqli_db);
    $username = processing_id($_GET['username']);
    $password = processing_id($_GET['password']);
    $fname = processing_id($_GET['fname']);
    $lname = processing_id($_GET['lname']);
    $date = processing_id($_GET['date']);

    if (processing_id($_GET['gender'])) {
        $gender = TRUE;
    } else {
        $gender = FALSE;
    }
    $email = processing_id($_GET['email']);
    $phone = processing_id($_GET['number']);
    $street = processing_id($_GET['streetaddress']);
    $town = processing_id($_GET['town']);
    
    if (!$conn) {
        echo "<p> Connection failure</p>";

    }else {
        mysqli_close($conn);
    }
    
?>