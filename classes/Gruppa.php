<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Gruppa;

/**
 * Description of Gruppa
 *
 * @author User
 */
class Gruppa extends Table {
    //put your code here
    public $gruppa_id = 0;
    public $name = "";
    public $special_id = 0;
    public $date_begin;
    public $date_end;

    public function validate()
    {
        return false;
    }
}
