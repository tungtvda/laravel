<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 7/13/2016
 * Time: 4:51 PM
 */
// return parent_id
 function _returnParentId($data, $id_field,$name_field, $parent=0,$str='--',$select=0){
    foreach($data as $key=>$val){
        if(isset($val[$id_field])&&isset($val[$name_field]))
        {
            $id=$val[$id_field];
            $name=$val[$name_field];
            if($val['parent_id']==$parent)
            {
                if($select!=0&&$id==$select) {
                    echo "<option value='$id' selected='selected'>$str $name</option>";
                }
                else{
                    echo "<option value='$id' selected='selected'>$str $name</option>";
                }
                _returnParentId($data, $id_field,$name_field, $id,$str.'&nbsp;&nbsp;',$select=0);
            }
        }
    }
}