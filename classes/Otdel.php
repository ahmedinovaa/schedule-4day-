<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Otdel;

/**
 * Description of Otdel
 *
 * @author User
 */
class Otdel extends Table {
    //put your code here
     public $otdel_id = 0;
    public $name = "";
    public $active = 1;
    
    public function validate(){
        return false;
    }
}
