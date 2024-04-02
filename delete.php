<?php

require_once("settings.php");

$conn = mysqli_connect($host, $user, $pwd, $sql_db);

$delete_submit_id = isset($_POST['jobs_delete']) ? $_POST['jobs_delete'] : '';

// Check if the delete_submit_id is empty
if (empty($delete_submit_id)) {
    echo "<p class = \"wrong\">No job ID provided for deletion.</p>";
} else {
    // Delete related rows from the Skills table
    $delete_skills_query = "DELETE FROM Skills WHERE EOI IN (SELECT EOI FROM Applicant WHERE Job_ID = '$delete_submit_id')";
    $result_skills = mysqli_query($conn, $delete_skills_query);

    // Proceed with deleting rows from the Applicant table
    $delete_applicant_query = "DELETE FROM Applicant WHERE Job_ID = '$delete_submit_id'";
    $result_applicant = mysqli_query($conn, $delete_applicant_query);

    if (!$result_applicant || !$result_skills) {
        echo "<p class = \"wrong\"> Something is wrong with the deletion query: ", mysqli_error($conn), "</p>";
    } else {
        // Check if any rows were affected
        if (mysqli_affected_rows($conn) > 0) {
            echo "<p class = \"ok\">Successfully deleted data.</p>";
        } else {
            echo "<p class = \"ok\">No data found for the specified job ID.</p>";
        }
    }
}

mysqli_close($conn);

?>
