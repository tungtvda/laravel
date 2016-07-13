<?php

namespace App\Modules;
use DB;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
    //return get by all
    public function _returnGetByAll($table, $model,$request,$dk,$value,$field_oder, $order, $nextPageUrl,$prevPageUrl)
    {
        $start=0;
        $limit=25;
        if ($request->limit!='') {
            $limit = intval($request->limit);
            $nextPageUrl .= '&limit=' . $limit;
            $prevPageUrl .= '&limit=' . $limit;
        }
        if ($request->start!='') {
            $start = intval($request->start);
            $nextPageUrl .= '&start=' . $start;
            $prevPageUrl .= '&start=' . $start;
        }

        if($request->filter!='')
        {
//            $checkfinter = $this->check_filter($_GET['filter'],$models);
            echo $request->filter;
            exit;
        }

        $data = $model->getByAll($dk,$value,$field_oder,$order,$start,$limit);
        $arr_response=array();
        if(!empty($data))
        {
            array_push($arr_response,$data);
            return $this->_return($arr_response,'Successfully',true,200);
        }
        else{
            $this->_return('',true,'Model is empty',200);
        }
    }

    //return response
    public function _return($arr_response,$mess,$status,$num){
        return response()->json(['data'=>$arr_response,'message'=>$mess, "success"=>$status],$num);
    }
    // return link server
    public function _returnLinkServer(){
        return 'http://' . $_SERVER['HTTP_HOST'] . '/index.php/';
    }
    // return link image
    public function _returnLinkImage(){
        return 'http://' . $_SERVER['HTTP_HOST'] . "/vgm/";
    }
    // return parent_id
    public function _returnParentId($data, $id_field,$name_field, $parent=0,$str='--',$select=0){
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
                    $this->_returnParentId($data, $id_field,$name_field, $id,$str.'&nbsp;&nbsp;',$select=0);
                }
            }
        }
    }
}
