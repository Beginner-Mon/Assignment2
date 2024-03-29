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
    <form action="processLOGIN.php" method  = "get">
    <h1 class="form__title">Login as Admin</h1>
    <div class="form-1">
                <fieldset class="form-personal">
                    <legend class="form-legend login__form-legend">Login</legend>
                    <div class="form-field">
                        <input type="text" name="username" id="username" class="form-input" placeholder=" "
                             
                             required>
                        <label for="username" class="form-label login--form-label">Username</label>
                    </div>
                    <div class="form-field">
                        <input type="text" name="password" id="password" class="form-input" placeholder=" "
                             
                             required>
                        <label for="password" class="form-label login--form-label">Password</label>
                    </div>
                </fieldset>

            </div>
      
                
            
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