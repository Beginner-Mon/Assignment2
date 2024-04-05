<?php

require_once 'settings.php';

// Attempt to establish database connection
$con = mysqli_connect($host, $user, $pwd, $sql_db);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

// Define variables and initialize with empty values


else{

  $update_id_number = trim($_POST['update_id_number']);
  $update_status = $_POST['update_status'];


  if (empty($_POST["update_id_number"])) {
    echo '<a href="manage.php">Back</a>';
    echo "<p>Please enter EOI.</p>";
  } else {
    $update_id_number = trim($_POST["update_id_number"]);
    $update_query = "UPDATE Applicant SET Status = '$update_status' WHERE EOI = '$update_id_number'";
    $update_status = $_POST['update_status'];
    // Update the status in the database
    
      if (mysqli_query($con, $update_query)) {
        if (mysqli_affected_rows($con) > 0) {
          echo '<a href="manage.php">Back</a>';
          echo "<p>Status updated successfully!</p>";
        } else {
          echo '<a href="manage.php">Back</a>';
          echo "<p class = \"ok\">No data found for the specified EOI.</p>";
        }
      } else {
        echo '<a href="manage.php">Back</a>';
        echo "<p>Error updating status: </p>" . mysqli_error($con);
      }
  }
  }
  mysqli_close($con);
  // Validate input
  

?>
