<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "head.inc"; ?>

    <link rel="stylesheet" href="style/style.css">
    <title>Enhancements 2</title>
</head>

<body>
    <?php
    require_once ("header.php");
    ?>
    <main class="enhance2">
        <header class="enhance2__header">
            <h1 class="enhance2__header-title">Enhancement 2</h1>
            <h3 class="enhance2__header-span">Wile doing this assignment, we have added more features to the website
            </h3>
        </header>
        <section class="enhance2__section">
            <div class="enhance2__container">
                <h1 class="enhance2__container__title">Enhancement 1</h1>
                <p class="enhance2__container__content">
                    This enhancement focuses on improving overall security, adding extra layers of firewall to
                    prevent from XSS, time attack and session hijacking.

                </p>
                <!-- add illu in here -->
                <img class="code__images" src="images/login.PNG" alt="Error 404">
                <h1 class="enhance__container_title_1">Code explaination</h1>

                <code class="enhance2__container__code">

    $pattern_name = '/^[A-Za-z]{1,20}$/';
    $pattern_email = '/^\\S+@\\S+\\.\\S+$/';
    $pattern_phone = '/^[\d\s]{8,12}$/';
    $pattern_address = '/^[0-9a-zA-Z\/ ]{1,40}$/';
    $pattern_postcode = '/^\D*(\d\D*){4}$/';
    $pattern_otherskill = '/^[A-Za-z]{1,40}$/';

    function sanitize_input($a, $pattern = '/^.{0,40}$/')
    {
        if (isset($a) && preg_match($pattern, trim($a))) {
            $a = htmlspecialchars($a);
            $a = trim($a);
            return $a;
        } else {
            echo "somehing is wrong with $a";

        }

    }

    //prevent XSS
    $job_ref = sanitize_input($_POST['reference__number']);
    $fname = sanitize_input($_POST['first-name'], $pattern_name);
    $lname = sanitize_input($_POST['last-name'], $pattern_name);
    $date = sanitize_input($_POST['date']);
    $gender = sanitize_input($_POST['gender']);
    $state = sanitize_input($_POST['state']);
    $email = sanitize_input($_POST['email'], $pattern_email);
    $phone = sanitize_input($_POST['phone'], $pattern_phone);
    $street = sanitize_input($_POST['SA'], $pattern_address);
    $town = sanitize_input($_POST['town'], $pattern_address);
    $postcode = sanitize_input($_POST['postcode'], $pattern_postcode);

                    </code>
                <p class="enhance2__code__explain">By using pattern, it can help to strict an input string, avoiding
                    inserting suspicious script to input </p>
                <h1 class="enhance__container_title_1">prevent timing attack</h1>
                <code class="enhance2__container__code">
    if (mysqli_num_rows($result) > 0) {
        usleep(1000);
        

        //CREATE SESSION ID
        session_start();
        $_SESSION['SSID'] = session_id();
        
        $query = "UPDATE Admin  SET token = '". session_id()."' WHERE username = '$username' AND password = '$pass';";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo mysqli_error($conn);
            exit();
        } else {
            if ( isset($result) && is_resource($result) ) { mysqli_free_result($result); }
            mysqli_close($conn);
        header("location: manage.php");
        }



        
    } else {
        usleep(1000);
        echo 'not found';
        if ( isset($result) && is_resource($result) ) { mysqli_free_result($result); }
    }
                </code>
                <p class="enhance2__code__explain">After checking if an account existed in the database, the
                    program remains a constant execution time to prevent the fluctuation of time when testing the
                    output.
                    operations.<br>Usleep helps by introducing a delay, which helps to control certain. In this case, it
                    is used to prevent time attack.</p>
                <h1 class="enhance__container_title_1">prevent session hijacking</h1>
                <code class="enhance2__container__code">
    //prevent session hijacking
    session_regenerate_id(true);
                </code>
                <p class="enhance2__code__explain">Session regenerate id helps prevent attackers from hijacking a
                    session by stealing the session id.<br> By changing the id constantly, even if the attacker obtain
                    an id, it became useless as soon as the session is regenerated.</p>
                </pre>
            </div>

            <div class="enhance2__container">
                <h1 class="enhance2__container__title">Enhancement 2</h1>
                <p class="enhance2__container__content">
                    This enhancement links the tables together through the use of foreign keys, creating a complete
                    database with data integrity.
                </p>
                <img class="code__images" src="images/db_table.png" alt="Error 404">
                <h1 class="enhance__container_title_1">Code explaination</h1>

                <code class="enhance2__container__code">
    CREATE TABLE Skills(
    EOI FOREIGN KEY REFERENCES Applicant(EOI));
                    </code>



                <p class="enhance2__code__explain">Foreign key create a link between tables.<br>In this example, the EOI
                    in the skill table is link to the EOI in Applicant table, which ensure data integrity.</p>

            </div>

        </section>
        <div class="enhance--video">
            <h1>Demonstration</h1>
            <a href="https://www.youtube.com/watch?v=BPm6mkWZbWs">Video</a>
        </div>
    </main>

    <?php require_once ("footer.inc"); ?>
</body>

</html>