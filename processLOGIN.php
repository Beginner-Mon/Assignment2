<?php
require_once ("settings.php");

$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
if (!$conn) {
    echo "<p>Connection Failed </p>";
    exit();
} else {
    function sanitize_input($a)
    {
        if (isset($a)) {
            $a = htmlspecialchars($a);
            $a = trim($a);
            return $a;
        } else {
            echo "this input is wrong";
            exit();
        }
    }
    $username = sanitize_input($_POST['username']);

    $pass = sanitize_input($_POST['password']);

    //prevent from sql injection
    $username = stripslashes($username);
    $pass = stripslashes($pass);
    $username = mysqli_real_escape_string($conn, $username);
    $pass = mysqli_real_escape_string($conn, $pass);


    $query = "SELECT username, password FROM Admin WHERE username ='$username' AND password ='$pass' ";

    $result = mysqli_query($conn, $query);

    if (!$result) {

        echo "wrong";
    } else {
        if (mysqli_num_rows($result) > 0) {
            usleep(1000);


            //CREATE SESSION ID
            session_start();
            $_SESSION['SSID'] = session_id();

            $query = "UPDATE Admin  SET SSID = '" . session_id() . "' WHERE username = '$username' AND password = '$pass';";
            $result = mysqli_query($conn, $query);
            if (!$result) {
                echo mysqli_error($conn);
                exit();
            } else {
                if (isset($result) && is_resource($result)) {
                    mysqli_free_result($result);
                }
                mysqli_close($conn);
                header("location: manage.php");
            }




        } else {
            usleep(1000);
            echo 'not found';
            if (isset($result) && is_resource($result)) {
                mysqli_free_result($result);
            }
        }


    }
    mysqli_close($conn);
}


?>