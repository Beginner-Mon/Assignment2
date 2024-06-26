<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "head.inc"; ?>

    <title>Application Form</title>
</head>

<body class="apply__body">
    <?php

    require_once ("settings.php");
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
    if (!$conn) {
        echo "<p>Connection Failure</p>";

    } else {
        $query = "SELECT Job_ref FROM Job_description";
        $result = mysqli_query($conn, $query);

        $pattern = "^";
        $jobs = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($jobs, $row['Job_ref']);
        }
        $pattern = "^(" . join("|", $jobs) . ")$";

        mysqli_free_result($result);
        mysqli_close($conn);
    }

    require_once "header.php";
    ?>

    <div class="form">

        <form action="processEOI.php" method="POST">
            <h1 class="form__title">Application Form</h1>

            <fieldset class="form--reference">
                <legend class="form-legend"> Your Position</legend>
                <input class="form-input" type="text" name="reference__number" id="re-num" placeholder="Job ID Number"
                    pattern="<?php echo $pattern; ?>" title="ids need to be available" required>
            </fieldset>


            <div class="form-1">
                <fieldset class="form-personal">
                    <legend class="form-legend">Personal details</legend>
                    <div class="form-field">
                        <input type="text" name="first-name" id="fname" class="form-input" placeholder=" "
                            pattern="^[a-zA-Z\s]{1,20}$" maxlength="20"
                            title="Alphebetical characters only and maximum 20 characters" required>
                        <label for="fname" class="form-label">First Name</label>
                    </div>
                    <div class="form-field">
                        <input type="text" name="last-name" id="lname" class="form-input" placeholder=" "
                            pattern="^[a-zA-Z\s]{1,20}$" maxlength="20"
                            title="Alphebetical characters only and maximum 20 characters" required>
                        <label for="lname" class="form-label">Last Name</label>
                    </div>
                    <div class="form-field">
                        <input type="date" name="date" id="date" class="form-input" required>
                    </div>
                    <fieldset class="gender_fieldset">
                        <legend class="gender-legend">Gender</legend>
                        <div class="form__radio">
                            <div>
                                <label for="male" class="gender-checkbox">Male</label>
                                <input type="radio" name="gender" id="male" value='M' required>
                            </div>

                            <div class="form__radio--female">
                                <label for="female" class="gender-checkbox">Female</label>
                                <input type="radio" name="gender" id="female" value='F'>
                            </div>

                            <div class="form__radio--other">
                                <label for="other" class="gender-checkbox">Other</label>
                                <input type="radio" name="gender" id="other" value='O'>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-field">

                        <input type="email" name="email" class="form-input" id="email" placeholder=" "
                            title="Please enter in right structure" required>
                        <label for="email" class="form-label">Email</label>
                    </div>
                    <div class="form-field">
                        <input type="text" name="phone" class="form-input" id="number" placeholder=" "
                            pattern="^[\d\s]{8,12}$" title="Please enter from 8-12 characters" required>
                        <label for="number" class="form-label">Phone</label>
                    </div>
                </fieldset>
                <fieldset class="form-address">
                    <legend>Home Address</legend>
                    <div class="form-field">
                        <input class="form-input" id="streetAdress" type="text" name="SA" placeholder=" "
                            pattern="^[a-zA-Z0-9\s\-/]{1,40}$" maxlength="40" title="Maximum of 40 characters" required>
                        <label for="streetAdress" class="form-label">Address</label>
                    </div>
                    <div class="form-field">
                        <input class="form-input" id="town" type="text" name="town" placeholder=" "
                            pattern="^[a-zA-Z0-9\s\-/]{1,40}$" maxlength="40" title="Maximum of 40 characters" required>
                        <label for="town" class="form-label">Suburb/Town</label>
                    </div>
                    <div class="form-field">
                        <select class="form-input" name="state" id="selection" size="1" required>
                            <option value="VIC">VIC</option>
                            <option value="NSW">NSW</option>
                            <option value="QLD">QLD</option>
                            <option value="NT">NT</option>
                            <option value="WA">WA</option>
                            <option value="SA">SA</option>
                            <option value="TAS">TAS</option>
                            <option value="ACT">ACT</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <input class="form-input" id="postcode" type="text" name="postcode" pattern="^\D*(\d\D*){4}$"
                            title="Please enter exactly 4 characters" placeholder=" " required>
                        <label for="postcode" class="form-label">Postcode</label>
                    </div>
                </fieldset>
            </div>

            <fieldset class="form-skills">
                <legend>Personal&nbsp;Skills</legend>
                <h3 class="skill-title">Skills that you have</h3>
                <div class="input-checkbox">
                    <div class="input-checkbox__skill">
                        <input class="checkbox" type="checkbox" id="skill-1" name="skill-1" value="'soft-skill'">
                        <label class="checkbox-label" for="skill-1"> Soft Skill</label>
                    </div>
                    <div class="input-checkbox__skill">
                        <input class="checkbox" type="checkbox" id="skill-2" name="skill-2" value="'problem-solving'">
                        <label class="checkbox-label" for="skill-2"> Problem Solving</label>
                    </div>
                    <div class="input-checkbox__skill">
                        <input class="checkbox" type="checkbox" id="skill-3" name="skill-3" value="'web-development'">
                        <label class="checkbox-label" for="skill-3"> Web Development</label>
                    </div>
                    <div class="input-checkbox__skill">
                        <input class="checkbox" type="checkbox" id="skill-4" name="skill-4"
                            value="'communication-skills'">
                        <label class="checkbox-label" for="skill-4"> Communication Skills</label>
                    </div>
                </div>
                <label class="form__other-skills" for="other_skill">Other Skills</label> <br>
                <textarea name="other_skill" id="other_skill" cols="30" rows="10"
                    placeholder="Enter text here"></textarea>
            </fieldset>
            <div class="form__buttons">
                <input type="submit" class="button button__submit" id="submit" value="Submit">
                <input type="reset" class="button button__reset" id="reset" value="Reset">
            </div>
        </form>

    </div>


    <?php
    require_once "footer.inc";
    ?>
</body>


</html>