<?php

require 'config/constants.php';

// to get the data back from the form
$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard using HMTL, CSS & JavaScript</title>

    <!--STYLESHEET -->
    <link rel="stylesheet" href="./style.css">
    <!-- MATERIALIZE ICON -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- GOOGLE FONT (Poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>


    <section class="form_section">
        <div class="container form_section-container">
            <h2>Sign In</h2>

            <div class="alert_message success">
                <p>

                </p>
            </div>

            <div class="alert_message error">

                </p>
            </div>
            <?php ?>
            <form action="<?= ROOT_URL ?>signin-logic.php" method="POST">
                <input type="text" name="username_email" value="<?= $username_email ?>" placeholder="UserName or Email">
                <input type="password" name="password" value="<?= $password ?>" placeholder="Password">
                <button type="submit" name="submit" class="btn">Sign In</button>
                <small>Don't have account? <a href="signup.php">Sign Up</a></small>
            </form>
        </div>
    </section>

</body>

</html>

<body>