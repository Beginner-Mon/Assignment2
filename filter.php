<?php

require_once ("settings.php");

$conn = mysqli_connect($host, $user, $pwd, $sql_db);

$filter_value_Fname = isset($_GET["filter_Fname"]) ? trim($_GET["filter_Fname"]) : "";
$filter_value_Lname = isset($_GET["filter_Lname"]) ? trim($_GET["filter_Lname"]) : "";
$filter_value_ID = isset($_GET["jobs_filter"]) ? trim($_GET["jobs_filter"]) : "";

// Check if all filter values are empty
if (empty($filter_value_Fname) && empty($filter_value_Lname) && empty($filter_value_ID)) {
    echo "Please enter at least one filter criteria.";
    exit; // Stop further execution
}

$query = "SELECT  fname, lname, Gender, DoB, Phone,Email, Skill_1,Skill_2,Skill_3,Skill_4, Other_Skill, Status FROM Applicant
INNER JOIN Skills on Applicant.EOI = Skills.EOI WHERE 1";

if (!empty($filter_value_ID)) {
    $query .= " AND Job_ID = '$filter_value_ID'";
}

if (!empty($filter_value_Fname)) {
    $query .= " AND fname LIKE '%$filter_value_Fname%'";
}

if (!empty($filter_value_Lname)) {
    $query .= " AND lname LIKE '%$filter_value_Lname%'";
}

$result = mysqli_query($conn, $query);

if (!$result) {
    echo "<p> Something is wrong with the query: ", mysqli_error($conn), "</p>";
} else {
    echo "<table border=\"1\">";
    echo "<tr>"

        . "<th scope=\"col\">First Name</th>"
        . "<th scope=\"col\">Last Name</th>"
        . "<th scope=\"col\">Gender</th>"
        . "<th scope=\"col\">DoB</th>"
        . "<th scope=\"col\">Phone</th>"
        . "<th scope=\"col\">Email</th>"
        . "<th scope=\"col\">Skill_1</th>"
        . "<th scope=\"col\">Skill_2</th>"
        . "<th scope=\"col\">Skill_3</th>"
        . "<th scope=\"col\">Skill_4</th>"
        . "<th scope=\"col\">OTher Skill</th>"
        . "<th scope=\"col\">Status</th>"
        . "</tr>";

    while ($item = mysqli_fetch_assoc($result)) {
        echo "<tr>";

        echo "<td>", $item["fname"], "</td>";
        echo "<td>", $item["lname"], "</td>";
        echo "<td>", $item["Gender"], "</td>";
        echo "<td>", $item["DoB"], "</td>";

        echo "<td>", $item["Phone"], "</td>";
        echo "<td>", $item["Email"], "</td>";
        echo "<td>", $item["Skill_1"], "</td>";
        echo "<td>", $item["Skill_2"], "</td>";
        echo "<td>", $item["Skill_3"], "</td>";
        echo "<td>", $item["Skill_4"], "</td>";
        echo "<td>", $item["Other_Skill"], "</td>";
        echo "<td>", $item["Status"], "</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_free_result($result);
}
mysqli_close($conn);

?>