<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="style/manage.css">
    <title>Managament</title>
</head>

<body>
    <style>
    * {
        margin: 0;
        padding: 0;
    }
    .manage-title {
    font-size: 2em; 
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.manage_form {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.manage_btn {
    margin: auto;
    background: none;
    text-transform: capitalize;
    font-size: 1.1em;
    color: #ffffff;
    border: none;
    cursor: pointer;
}
.manage-content {
    text-align: center;
    font-weight: 500;
    padding: 10px;
    letter-spacing: 1.2px;
    font-size: 3em;
}
@media (max-width: 578px){
    .manage-content {
        font-size: 2em;
    }
    .manage-title {
        font-size: 1.1em;
    }
    .manage__header {
        flex-wrap: wrap;
        gap:10px;
        padding: 10x 0;
        align-items: center;
    }
}
    </style>


    <link rel="stylesheet" href="style/style.css">
    <title>Management</title>
</head>

<body class='manage_body_container'>
    <?php 

    session_start(); 
    if (!isset($_SESSION['SSID'])){
        header("location: login.php");
    }

            
    // Set the inactivity time of 15 minutes (900 seconds)
    $inactivity_time = 15 * 60;


    if (!isset($_SESSION['last_regeneration'])){
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    } else {
        $interval =  60 * 30;
        if (time() - $_SESSION['last_regeneration'] >= $interval){
            session_regenerate_id(true);
            $_SESSION['last_regeneration'] = time();
        }
    }

    // Set the inactivity time of 15 minutes (900 seconds)
    $inactivity_time = 1 * 60;


    // Check if the last_timestamp is set
    // and last_timestamp is greater then 15 minutes or 9000 seconds
    // then unset $_SESSION variable & destroy session data
    if (isset($_SESSION['last_timestamp']) && (time() - $_SESSION['last_timestamp']) > $inactivity_time) {
        session_unset();
        session_destroy();

        //Redirect user to login page
        header("Location: login.php");
        exit();
    } else {

        // Regenerate new session id and delete old one to prevent session fixation attack
        session_regenerate_id(true);

        // Update the last timestamp
        $_SESSION['last_timestamp'] = time();
    }

    function get_username() {
        require_once("settings.php");
      
        $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
        if (!$conn) {
            echo "<p>Connection Failed </p>";
            exit();
        }
        
        $query = "SELECT username FROM Admin WHERE token = '". $_SESSION['SSID']. "' ";

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $username = "";
        
        
            $username = $row['username'];

        mysqli_free_result($result);
        mysqli_close($conn);
        return $username;
    }
?>
    <header class = "manage__header">
        <h1 class="manage-title"><?php echo get_username(); ?></h1>
        <form action="" method = "post" class = "manage_form"> 
        <input type="submit" name ="logout" class = "manage_btn" value = "Log out"> 
        </form>
    </header>
    <h1 class="manage-content">Applicant tables</h1>
<?php

    require_once 'settings.php';

    // Attempt to establish database connection
    $con = mysqli_connect($host, $user, $pwd, $sql_db);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $query = "SELECT * FROM Applicant WHERE 1";


    // Execute the query
    $result = mysqli_query($con, $query);
    

    ?>
    <div class="active_menu">
        <div class='left_panel_manage'>
            <div class="filter_menu" id="filter_menu">
                <form action="filter.php" method='GET' target="_blank">
                    <fieldset class='manage_fieldset_config'><legend>FILTER</legend>
                        <p class="row">	<label for="filter_Fname">First Name: </label>
                        <input type="text" name="filter_Fname" id="filter_Fname" /></p>
                        <p class="row">	<label for="filter_Lname">Last Name: </label>
                        <input type="text" name="filter_Lname" id="filter_Lname" /></p>
                        <label for="jobs_filter">Job ID: </label>
                        <select name="jobs_filter" id="jobs_filter">
                        <option value=""></option>
                        <option value="800000">800000</option>
                        <option value="800001">800001</option>
                        <option value="800002">800002</option>
                        </select>
                        <div class='filter_button_align'>
                            <p>	<input type="submit" value="Search" class='manage_btn'/></p>
                            <p> <input type="reset" value="Reset" class='manage_btn'></p>
                        </div>
                    </fieldset>
                </form>
                <form action="" method="post"> 
          <input type="submit" name="logout" class="manage_btn" id="caution_btn_logout" value="Log out"> 
      </form> 
            </div>
        </div>

        <div class='right_panel_manage'>
            <div class='delete_menu'>
                <form action="delete.php" method="post" onsubmit="return confirm('Are you sure you want to delete?');">
                    <fieldset class='manage_fieldset_config'>
                    <legend>DELETE</legend>
                    <label for="jobs_delete">Job ID for deletion: </label>
                        <select name="jobs_delete" id="jobs_delete">
                        <option value=""></option>
                        <option value="800000">800000</option>
                        <option value="800001">800001</option>
                        <option value="800002">800002</option>
                        </select>
                        <a><input type="submit" class='manage_btn' id="caution_btn" value="Delete"></a>
                    </fieldset>
                </form>
            </div>

            <div class='update_menu'>
                <form action="update.php" method="post" onsubmit="return confirm('Are you sure you want to update?');">
                <fieldset class='manage_fieldset_config'>
                <legend>UPDATE STATUS</legend>
                <p class="row">	<label for="update_id_number">ID: </label>
                <input type="text" name="update_id_number" id="update_id_number"/></p> 
                <label for="update_status">Status: </label>
                        <select name="update_status" id="update_status">
                        <option value="New">New</option>
                        <option value="Current">Current</option>
                        <option value="Final">Final</option>
                        </select>
                <a><input type="submit" class='manage_btn' value="Update"></a>
                </fieldset>
                </form>
            </div>
        </div>
        
    </div>
    
    <div class="display_container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Applicants list</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>EOI</td>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td>Gender</td>
                                <td>Job_ID</td>
                                <td>Phone</td>
                                <td>Email</td>
                                <td>DoB</td>
                                <td>Status</td>
                            </tr>
                            <?php 
                            // Check if $result is not null
                            if ($result) {
                                // Fetch and display data
                                while($item = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $item['EOI']; ?></td>
                                    <td><?php echo $item['fname']; ?></td>
                                    <td><?php echo $item['lname']; ?></td>
                                    <td><?php echo $item['Gender']; ?></td>
                                    <td><?php echo $item['Job_ID']; ?></td>
                                    <td><?php echo $item['Phone']; ?></td>
                                    <td><?php echo $item['Email']; ?></td>
                                    <td><?php echo $item['DoB']; ?></td>
                                    <td><?php echo $item['Status']; ?></td>
                                </tr>
                            <?php
                                }
                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                // Display error message if $result is null
                                echo "<tr><td colspan='9'>No data found.</td></tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    

    <?php 
    if(isset($_POST['logout'])){
        session_unset();
        session_regenerate_id(true);
        session_destroy();
        header("location: login.php");
    }
    ?>

</body>

</html>
