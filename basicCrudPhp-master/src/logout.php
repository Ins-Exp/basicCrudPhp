<?php
session_start();
if (session_destroy()) {
    unset($_SESSION['id']);
    unset($_SESSION['email']);
    unset($_SESSION['role']);


    header("Location: login.php");
}