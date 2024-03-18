<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Login form</title>
</head>

<body class="apply__body">
    <?php 
        require_once "header.php";
    ?>
    <div class="form login--form">
    <form action="" method  = "get">
    <div class="form-1">
                <fieldset class="form-personal">
                    <legend class="form-legend login__form-legend">Login</legend>
                    <div class="form-field">
                        <input type="text" name="username" id="username" class="form-input" placeholder=" "
                            pattern="^[a-zA-Z\s]{1,20}$" maxlength="20"
                            title="Alphebetical characters only and maximum 20 characters" required>
                        <label for="username" class="form-label login--form-label">Username</label>
                    </div>
                    <div class="form-field">
                        <input type="text" name="password" id="password" class="form-input" placeholder=" "
                            pattern="^[a-zA-Z\s]{1,20}$" maxlength="20"
                            title="Alphebetical characters only and maximum 20 characters" required>
                        <label for="password" class="form-label login--form-label">Password</label>
                    </div>
                </fieldset>
            </div>
            </form>
            </div>
            <?php
    require_once "footer.inc";
    ?>
</body>

</html>