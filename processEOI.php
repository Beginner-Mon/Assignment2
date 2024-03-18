<?php
        const $pattern_name = "/^[A-Za-z]{1,20}$/";
        $pattern_email = '/^\\S+@\\S+\\.\\S+$/';
        $pattern_phone = '/^[\d\s]{8,12}$/';
        $pattern_address = '^[a-zA-Z0-9\s\-/]{1,40}$';
        $pattern_postcode = '^\D*(\d\D*){4}$';
        $pattern_otherskill = '/^[A-Za-z]{1,40}$/';
        function sanitize_input($a, $pattern = "/^.{1,40}$/") {
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

    
    if (!$conn) {
        echo "<p> Connection failure</p>";

    }else {
        const $username = sanitize_input($_GET['username']);
        const $password = sanitize_input($_GET['password']);
        const $fname = sanitize_input($_GET['fname'], $pattern_name);
        const $lname = sanitize_input($_GET['lname'], $pattern_name);
        const $date = sanitize_input($_GET['date']);
        const $gender = sanitize_input($_GET['gender'])
        const $state = sanitize_input($_GET['state'])
        const $email = sanitize_input($_GET['email'], $pattern_email);
        const $phone = sanitize_input($_GET['phone'], $pattern_phone);
        const $street = sanitize_input($_GET['SA'],$pattern_address);
        const $town = sanitize_input($_GET['town'], $pattern_address);
        const $postcode = sanitize_input($_GET['postcode'], $pattern_postcode);
        const $other_skill = sanitize_input($_GET['other_skill'], $pattern_otherskill);

        





        mysqli_close($conn);
    }
    
?>