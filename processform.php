<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>answer</h1>
    <?php
        
        $pattern_name = "/^[A-Za-z]{1,20}$/";
        $pattern_email = '/^\\S+@\\S+\\.\\S+$/';
        $skill = "";
        if (isset($_GET['state'])) {
            $state = $_GET['state'];
        }
        echo $state . "<br/>";
        if (isset($_GET['skill-1'])){
            $skill .= $_GET['skill-1'];
        }
        function sanitize_input($a, $pattern = "/^.{1,40}$/") {
                if (isset($a)  && preg_match($pattern, $a)) {
                $a = htmlspecialchars($a);
                $a = trim($a);
                
                return $a;
            } else {
                echo "somehing is wrong with $a";
    
            }
            
        }
        $gender ="";
        if (isset($_GET['gender'])) {
            $gender = $_GET['gender'];
            
        }
        $name = sanitize_input($_GET['firstname'], $pattern_name);
        echo $name;
        $email = sanitize_input($_GET['email'], $pattern_email);
        $date = $_GET['date'];
        $phone = sanitize_input($_GET['phone']);
        echo $email . "<br>";
        echo $skill . "<br>";    
        echo $gender . "<br>";
        echo $date . "<br>";
        echo $phone;
        
 
    ?>
</body>
</html>