<?php
session_start();
require_once 'dbHandler.php';

if (isset($_SESSION['naam'])) {
    $username = $_SESSION['naam'];

    $db = new dbHandler();
    $result = $db->deleteUser($username);

    if ($result) {
        // Account deleted successfully, redirect to login page
        session_destroy();
        header("Location: login.php");
        exit;
    } else {
        echo "Failed to delete account.";
    }
} else {
    // User not logged in, redirect to login page
    header("Location: login.php");
    exit;
}
?>