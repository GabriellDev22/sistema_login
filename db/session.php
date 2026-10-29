
<?php
session_start();
if (!($_SESSION["nome"])) {
    header("Location: ../index/page_login.php");
    exit;
}
if (isset($_POST["logout"])) {

    session_unset();
    session_destroy();

    header("Location: ../index/page_login.php");
    exit;
}
?>
