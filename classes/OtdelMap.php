<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace OtdelMap;

/**
 * Description of OtdelMap
 *
 * @author User
 */
class OtdelMap extends BaseMap {
    //put your code here
    public function arrOtdels() {
        $res = $this->db->query("SELECT otdel_id AS id, name AS value FROM otdel");
return $res->fetchAll(PDO::FETCH_ASSOC);
         }
         
         
}
