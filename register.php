<?php
require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Constants.php");
require_once("includes/classes/Account.php");

$account = new Account($connection);

if (isset($_POST["submitButton"])) {

    $firstName = FormSanitizer::sanitizeFormString($_POST["firstName"]);
    $lastName = FormSanitizer::sanitizeFormString($_POST["lastName"]);
    $username = FormSanitizer::sanitizeFormUsername($_POST["username"]);
    $email = FormSanitizer::sanitizeFormEmail($_POST["email"]);
    $email2 = FormSanitizer::sanitizeFormEmail($_POST["email2"]);
    $password = FormSanitizer::sanitizeFormPassword($_POST["password"]);
    $password2 = FormSanitizer::sanitizeFormPassword($_POST["password2"]);


    $account->register($firstName, $lastName, $username, $email, $email2, $password, $password2);
}
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Welcome to Netflix</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
    </head>
    <body>
        <div class="signInContainer">
            <div class="column">
            <div class="header">
                <img src="assets/images/logo.png" title="Logo" alt="site logo" />
                <h3>Sign Up</h3>
                <span>to continue to Netflix</span>
            </div>

                <form method="POST">

                <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                <input type="text" name="firstName" placeholder="First Name" required>

                <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                <input type="text" name="lastName" placeholder="Last Name" required>

                <?php echo $account->getError(Constants::$userNameCharacters); ?>
                <?php echo $account->getError(Constants::$userNameTaken); ?>
                <input type="text" name="userName" placeholder="User Name" required>

                <?php echo $account->getError(Constants::$emailsDontMatch); ?>
                <?php echo $account->getError(Constants::$emailInvalid); ?>
                <?php echo $account->getError(Constants::$emailTaken); ?>
                <input type="email" name="email" placeholder="Email" required>

                <input type="email" name="email2" placeholder="Confirm Email" required>
                
                <?php echo $account->getError(Constants::$passwordDontMatch); ?>
                <?php echo $account->getError(Constants::$passwordLength); ?>
                <input type="password" name="password" placeholder="Password" required>

                <input type="password" name="password2" placeholder="Confirm Password" required>

                <input type="submit" name="submitButton" value="Submit">

                </form>

                <a href="login.php" class="signInMessage">Already have an account ? Sign In here </a>

            </div>
        </div>
    </body>
</html>