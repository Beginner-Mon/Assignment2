<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process ID</title>
</head>
<body>
<?php   
    
    require_once("settings.php");
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

    //create pattern 
    $pattern_name = '/^[A-Za-z]{1,20}$/';
    $pattern_email = '/^\\S+@\\S+\\.\\S+$/';
    $pattern_phone = '/^[\d\s]{8,12}$/';
    $pattern_address = '/^[0-9a-zA-Z\/ ]{1,40}$/';
    $pattern_postcode = '/^\D*(\d\D*){4}$/';
    $pattern_otherskill = '/^[A-Za-z]{1,40}$/';

    //sanitize the input
    function sanitize_input($a, $pattern = '/^.{0,40}$/') {
        if (isset($a)  && preg_match($pattern, trim($a))) {
        $a = htmlspecialchars($a);
        $a = trim($a);
        return $a;
    } else {
        echo "somehing is wrong with $a";

    }
    
    }
    // getting input from apply.php
    $job_ref = sanitize_input($_POST['reference__number']);
    $username = sanitize_input($_POST['username']);
    $password = sanitize_input($_POST['password']);
    $fname = sanitize_input($_POST['first-name'], $pattern_name);
    $lname = sanitize_input($_POST['last-name'], $pattern_name);
    $date = sanitize_input($_POST['date']);
    $gender = sanitize_input($_POST['gender']);
    $state = sanitize_input($_POST['state']);
    $email = sanitize_input($_POST['email'], $pattern_email);
    $phone = sanitize_input($_POST['phone'], $pattern_phone);
    $street = sanitize_input($_POST['SA'],$pattern_address);
    $town = sanitize_input($_POST['town'], $pattern_address);
    $postcode = sanitize_input($_POST['postcode'], $pattern_postcode);
    
    if (isset($_POST['other_skill']) && trim($_POST['other_skill']) != "") {
        $other_skill = $_POST['other_skill'];
    }

    function check_job_ref($ref){
        $job_ref = 0;
        switch ($ref) {
            case "AIE01" :
                $job_ref = 800000;
                break;
            case "SER15":
                $job_ref = 800001;
                break;
            case "TES11":
                $job_ref = 800002;
                break;
            default:
                header("location: apply.php");
        }
        return $job_ref;

        
    }
    $job_ref = check_job_ref($job_ref); //get the id from job reference

    //apppeding the skill from apply.php checkbox
    $skills = array();
    for ($i = 1; $i <= 4; ++$i) {
        if(isset($_POST["skill-$i"])){
            array_push($skills, $_POST["skill-$i"]);
        }
    }

    $nums = count($skills);    //get the number of skills

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
        
// add applicant information to the table
        $query = "INSERT INTO Applicant(Fname, Lname, Gender, Phone, Email, DoB, Job_ID) VALUES ('$fname', '$lname','$gender', $phone, '$email','$date', $job_ref);";
        $result = mysqli_query($conn, $query);
        if (!$result){
            echo "<p>something is wrong $query</p>";
        }
        if ( isset($result) && is_resource($result) ) { mysqli_free_result($result); }

        $applicant_id = mysqli_insert_id($conn); // get the latest id that has been added to the table

// add applicant address to the table
        $query = "INSERT INTO Address(EOI, Address, Suburb, State, Postcode) VALUES($applicant_id, '$street', '$town', '$state', $postcode); ";
        $result = mysqli_query($conn, $query);
        if (!$result){
            echo "<p>something is wrong $query</p>";
        }
        if ( isset($result) && is_resource($result) ) { mysqli_free_result($result); }
        
// add applicant skill to the table
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

