<?php 
    $require_once "settings.php";
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
    if (!$conn){
        echo "<p>Connection Failure</p>";
        exit();

    }
    else {
        $query = "SELECT Job_ref FROM Job_description";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $jobs = array();
        while ($row) {
            array_push($jobs, $row['job_ref']);
            
        }
        mysqli_free_result($result);
        mysqli_close($conn);
    }

?>
