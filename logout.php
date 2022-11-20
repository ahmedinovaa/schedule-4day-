<?php
require_once 'autoload.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    unset($_SESSION['role']);
    print_r($_SESSION['role']);
    header('Location: auth.php');
}