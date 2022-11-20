<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

session_start();
require_once 'autoload.php';
if (!isset($_SESSION['role']) || isset($_POST['out'])) {
session_destroy();
header('Location: auth.php');
exit;
}