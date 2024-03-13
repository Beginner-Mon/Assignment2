<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <title>Application Form</title>
</head>

<body class="apply__body">
    <?php

    require_once "header.php";
    ?>

    <div class="form">

        <form action="https://mercury.swin.edu.au/it000000/formtest.php" method="post">
            <h1 class="form__title">Application Form</h1>
            <fieldset class="form--reference">
                <legend class="form-legend"> Your Roles</legend>
                <input class="form-input" type="text" name="reference__number" id="re-num" placeholder="Reference Number" pattern="^[a-zA-Z0-9]{5}$" title="Please enter the exact 5 characters ID" required>
            </fieldset>
            <div class="form-1">
                <fieldset class="form-personal">
                    <legend class="form-legend">Personal details</legend>
                    <div class="form-field">
                        <input type="text" name="first-name" id="fname" class="form-input" placeholder=" " pattern="^[a-zA-Z\s]{1,20}$" maxlength="20" title="Alphebetical characters only and maximum 20 characters" required>
                        <label for="fname" class="form-label">First Name</label>
                    </div>
                    <div class="form-field">
                        <input type="text" name="first-name" id="lname" class="form-input" placeholder=" " pattern="^[a-zA-Z\s]{1,20}$" maxlength="20" title="Alphebetical characters only and maximum 20 characters" required>
                        <label for="fname" class="form-label">Last Name</label>
                    </div>
                    <div class="form-field">
                        <input type="date" name="date" id="date" class="form-input" required>
                    </div>
                    <fieldset class="gender_fieldset">
                        <legend class="gender-legend">Gender</legend>
                        <div class="form__radio">
                            <div>
                                <label for="male" class="gender-checkbox">Male</label>
                                <input type="radio" name="gender" id="male">
                            </div>

                            <div class="form__radio--female">
                                <label for="female" class="gender-checkbox">Female</label>
                                <input type="radio" name="gender" id="female">
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-field">

                        <input type="email" name="email" class="form-input" id="email" placeholder=" " title="Please enter in right structure" required>
                        <label for="email" class="form-label">Email</label>
                    </div>
                    <div class="form-field">
                        <input type="text" name="phone" class="form-input" id="number" placeholder=" " pattern="^[\d\s]{8,12}$" title="Please enter from 8-12 characters" required>
                        <label for="number" class="form-label">Phone</label>
                    </div>
                </fieldset>
                <fieldset class="form-address">
                    <legend>Home Address</legend>
                    <div class="form-field">
                        <input class="form-input" id="streetAdress" type="text" name="SA" placeholder=" " pattern="^[a-zA-Z0-9\s\-/]{1,40}$" maxlength="40" title="Maximum of 40 characters" required>
                        <label for="streetAdress" class="form-label">Address</label>
                    </div>
                    <div class="form-field">
                        <input class="form-input" id="town" type="text" name="suburb" placeholder=" " pattern="^[a-zA-Z0-9\s\-/]{1,40}$" maxlength="40" title="Maximum of 40 characters" required>
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
                        <input class="form-input" id="postcode" type="text" name="postcode" pattern="^\D*(\d\D*){4}$" title="Please enter exactly 4 characters" placeholder=" " required>
                        <label for="postcode" class="form-label">Postcode</label>
                    </div>
                </fieldset>
            </div>

            <fieldset class="form-skills">
                <legend>Personal&nbsp;Skills</legend>
                <h3 class="skill-title">Skills that you have</h3>
                <div class="input-checkbox">
                    <div class="input-checkbox__skill">
                        <input class="checkbox" type="checkbox" id="skill-1" name="soft skill" value="soft-skill">
                        <label class="checkbox-label" for="skill-1"> Soft Skill</label>
                    </div>
                    <div class="input-checkbox__skill">
                        <input class="checkbox" type="checkbox" id="skill-2" name="problem solving" value="problem-solving">
                        <label class="checkbox-label" for="skill-2"> Problem Solving</label>
                    </div>
                    <div class="input-checkbox__skill">
                        <input class="checkbox" type="checkbox" id="skill-3" name="web development" value="web-development">
                        <label class="checkbox-label" for="skill-3"> Web Development</label>
                    </div>
                    <div class="input-checkbox__skill">
                        <input class="checkbox" type="checkbox" id="skill-4" name="communication skills" value="communication-skills">
                        <label class="checkbox-label" for="skill-4"> Communication Skills</label>
                    </div>
                </div>
                <label class="form__other-skills" for="other_skill">Other Skills</label> <br>
                <textarea name="other_skill" id="other_skill" cols="30" rows="10" placeholder="Enter text here"></textarea>
            </fieldset>
            <div class="form__buttons">
                <input type="submit" class="button button__submit" id="submit" value="Submit">
                <input type="reset" class="button button__reset" id="reset" value="Reset">
            </div>
        </form>

    </div>

    <!-- <footer class="footer">

        <div class="footer__container">
            <div class="footer__container--row">
                <div class="footer__container--col footer__container--col--1">
                    <h4 class="footer__container--col--title">Our group</h4>
                    <ul class="footer__container--col__lists">
                        <li class="footer__container--col--name"><a href="mailto:104993925@student.swin.edu.au"
                                class="footer__container--col--name--link">Tran&nbsp;Buu&nbsp;Duc&nbsp;Tri</a>
                        </li>
                        <li class="footer__container--col--name"><a href="malito:104992981@student.swin.edu.au"
                                class="footer__container--col--name--link">Nguyen&nbsp;Duy&nbsp;Quang</a>
                        </li>
                        <li class="footer__container--col--name"><a href="mailto:104841290@student.swin.edu.au"
                                class="footer__container--col--name--link">Le&nbsp;Hac&nbsp;Du</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__container--col footer__container--col--2">
                    <h4 class="footer__container--col--title">Follow Us</h4>
                    <div class="footer__container--col--social_link">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
    <?php
    require_once "footer.inc";
    ?>
</body>


</html>