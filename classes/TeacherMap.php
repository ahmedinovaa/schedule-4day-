<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace TeacherMap;

/**
 * Description of TeacherMap
 *
 * @author User
 */
class TeacherMap extends BaseMap {
    public function findById($id = null) {
      if ($id) {
$res = $this->db->query("SELECT user_id, otdel_id
FROM teacher WHERE user_id = $id");
$teacher = $res->fetchObject("Teacher");
if ($teacher) {
return $teacher;
}
}
return new Teacher();  
    }
    
    public function save(User $user, Teacher $teacher) {
        if ($user->validate() && $teacher->validate() && (new
UserMap())->save($user)) {
if ($teacher->user_id == 0) {
$teacher->user_id = $user->user_id;
return $this->insert($teacher);
} else {
return $this->update($teacher);
}
}
return false;
        
    }
    
     private function insert(Teacher $teacher) {
        if ($this->db->exec("INSERT INTO teacher(user_id,
otdel_id) VALUES($teacher->user_id, $teacher->otdel_id)")
== 1) {
return true;
}
return false;
    }
    private function update(Teacher $teacher) {
        if ($this->db->exec("UPDATE teacher SET otdel_id = $teacher->otdel_id WHERE user_id=".$teacher->user_id) == 1) 
        {
            return true;
            
        }
        return false;      
    }
    
}
