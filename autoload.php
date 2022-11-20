<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of autoload
 *
 * @author User
 */
spl_autoload_register(function ($class_name) {
include 'classes/'.$class_name . '.php';
});
