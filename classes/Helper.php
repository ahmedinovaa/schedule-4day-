<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Helper
 *
 * @author User
 */
class Helper {
    //put your code here
    
    public static function clearString($str) {
        return trim(strip_tags($str));
        
    }
    public static function clearInt($str) {
        return (int)$str;
    }
    
    public static function printSelectOptions ($key=[], $options =[]) {
    
        if ($options) {
            foreach ($options as $option) { ?> <option value="<?=$option['id'];?>" <?=($key == $option['id'])?'selected':'';?>>
            <?=$option['value'];?></option>
<?php }
}
    }
}
