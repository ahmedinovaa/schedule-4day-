<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Schedule;

/**
 * Description of Schedule
 *
 * @author User
 */
class Schedule extends Table
{
    public $schedule_id = 0;
    public $lesson_plan_id = 0;
    public $day_id = 0;
    public $lesson_num_id = 0;
    public $classroom_id = 0;
   //put your code here
    public function validate()
    {
        return false;
    }
}

