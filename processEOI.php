<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php   
    
    require_once("settings.php");
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
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
    if ($gender ==1) {
        $gender = True;
    }
    if(!$conn) {
        echo "<p>Database Connection failure</p>";
    }
    else {
        $sql_table = "Personal_Details";
        $query = "INSERT INTO $sql_table(First_name, Last_name, Phone, date_of_birth, Male) VALUES ('$fname', '$lname', $phone, '$date', $gender)";
        $result = mysqli_query($conn, $query);
        if(!$result){
            echo "<p class = 'wrong'> Something is wrong with ", $query , "</p>";

        }    else {
            echo "<p class ='ok'>Successfully added new car record</p>";
            mysqli_free_result($result);
        }
        mysqli_close($conn);
    }
    
   
?>
</body>
</html>

