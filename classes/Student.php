<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Student;

/**
 * Description of Student
 *
 * @author User
 */
class Student extends Table
{
    public $user_id = 0;
    public $gruppa_id = 0;
    public $num_zach = "";
   //put your code here
    public function validate()
    {
        return false;
    }
}
