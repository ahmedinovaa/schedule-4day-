<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace User;

/**
 * Description of User
 *
 * @author User
 */
class User extends Table {
    public $user_id = 0;
    public $lastname = "";
    public $firstname = "";
    public $patronymic = "";
    public $login = "";
    public $pass = "";
    public $gender_id = 0;
    public $birthday;
    public $role_id = 0;
    public $active = 1;
    //put your code here
     public function validate(){
if (!empty($this->lastname) &&
        !empty($this->firstname) &&
        !empty($this->login) &&
        !empty($this->pass) &&
        !empty($this->role_id) &&
        !empty($this->gender_id)) {
    return true;
}
return false;
    }
      
}
