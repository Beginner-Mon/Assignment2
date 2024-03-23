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
        if (isset($a)  && preg_match($pattern, trim($a))) {
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
    
    if (isset($_GET['other_skill'])) {
        $other_skill = $_GET['other_skill'];
    }
    $skills = array();
    for ($i = 1; $i <= 4; ++$i) {
        if(isset($_GET["skill-$i"])){
            array_push($skills, $_GET["skill-$i"]);
        }
    }

    $nums = count($skills);

    function number_of_skills($num){ 
        $s = "";
        for ($i = 1; $i <= $num; ++$i ){
            $s .= "Skill_$i,";
        }
        return $s ;
    }
    if(!$conn) {
        echo "<p>Database Connection failure</p>";
    }
    else {
        $sql_table = "Applicant";
        $query = "INSERT INTO $sql_table(Fname, Lname, Gender, Phone, Email, DoB, Job_ID) VALUES ('$fname', '$lname','$gender', $phone, '$email','$date',800001);";
        
        
        $result = mysqli_query($conn, $query);
        if (!$result){
            echo "<p>some thing is wrong $query</p>";
        }

        
        if ( isset($result) && is_resource($result) ) { mysqli_free_result($result); }
        $applicant_id = mysqli_insert_id($conn);
        $query = "INSERT INTO Address(EOI, Address, Suburb, State, Postcode) VALUES($applicant_id, '$street', '$town', '$state', $postcode); ";
        $result = mysqli_query($conn, $query);
        if (!$result){
            echo "<p>some thing is wrong $query</p>";
        }
        if ( isset($result) && is_resource($result) ) { mysqli_free_result($result); }
        $query = "INSERT INTO Skills( " . number_of_skills($nums) . " Other_skill, EOI) VALUES( " . join(",", $skills) . ", '$other_skill',$applicant_id)";
        $result = mysqli_query($conn, $query);


        

        
        
        
        if(!$result){
            echo "<p class = 'wrong'> Something is wrong with ", $query , "</p>";

        }    else {
            
            if ( isset($result) && is_resource($result) ) { mysqli_free_result($result); }
            require "success.php";
        }
        mysqli_close($conn);
    }
    
   
?>
</body>
</html>

