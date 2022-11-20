<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace LessonPlan;

/**
 * Description of LessonPlan
 *
 * @author User
 */
class LessonPlan extends Table {
    //put your code here
    public $lesson_plan_id = 0;
    public $gruppa_id = 0;
    public $subject_id = 0;
    public $user_id = 0;

    public function validate()
    {
        return false;
    }
}
