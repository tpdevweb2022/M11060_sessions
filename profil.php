<?php
session_start();
var_dump($_POST);
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION["last_name"] = $_POST["last_name"];
    $_SESSION["first_name"] = $_POST["first_name"];
    $_SESSION["mail"] = $_POST["mail"];
    $_SESSION["passwd"] = $_POST["passwd"];
}

var_dump($_SESSION);
?>

<h1><?= $_SESSION["first_name"] ?> <?= $_SESSION["last_name"] ?> </h1>
<h2><?= $_SESSION["mail"] ?> </h2>

<a href="news.php">News</a>
<br>
<a href="modif-pass.php">Modif pass</a>