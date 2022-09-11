<?php
require_once("includes/config.php");
require_once("includes/classes/PreviewProvider.php");
require_once("includes/classes/Entity.php");

if (!isset($_SESSION["userLoggedIn"])) {
    header("Location: register.php");
}

$userLoggedIn = $_SESSION["userLoggedIn"];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Welcome to Netflix</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/06356e5a22.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">