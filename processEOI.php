<?php
        $pattern_name = '/^[A-Za-z]{1,20}$/';
        $pattern_email = '/^\\S+@\\S+\\.\\S+$/';
        $pattern_phone = '/^[\d\s]{8,12}$/';
        $pattern_address = '/^[0-9a-zA-Z\/ ]{1,40}$/';
        $pattern_postcode = '/^\D*(\d\D*){4}$/';
        $pattern_otherskill = '/^[A-Za-z]{1,40}$/';
        function sanitize_input($a, $pattern = '/^.{1,40}$/') {
            if (isset($a)  && preg_match($pattern, $a)) {
            $a = htmlspecialchars($a);
            $a = trim($a);
            
            return $a;
        } else {
            echo "somehing is wrong with $a";

        }
        
        }
    require_once("settings.php");
    $conn = @mysqli_connect($host, $user, $sqli_db);
    $username = sanitize_input($_GET['username']);
    $password = sanitize_input($_GET['password']);
    $fname = sanitize_input($_GET['first-name'], $pattern_name);
    $lname = sanitize_input($_GET['last-name'], $pattern_name);
    $date = sanitize_input($_GET['date']);
    $gender = sanitize_input($_GET['gender']);
    $state = sanitize_input($_GET['state']);
    $email = sanitize_input($_GET['email'], $pattern_email);
    $phone = sanitize_input($_GET['phone'], $pattern_phone);
    $street = sanitize_input($_GET['SA'],$pattern_address);
    $town = sanitize_input($_GET['town'], $pattern_address);
    $postcode = sanitize_input($_GET['postcode'], $pattern_postcode);
    $other_skill = sanitize_input($_GET['other_skill'], $pattern_otherskill);

    echo "<p> $username , $password , $fname, $lname, $date, $gender, $state, $email, $phone, $street, $town, $postcode, $other_skill</p>";


    
    if (!$conn) {
        echo "<p> Connection failure</p>";

    }else {
       



        mysqli_close($conn);
    }
    
?>