<?php

namespace App\Modules;
use DB;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Database\QueryException;

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
//            echo $request->filter;
//            exit;
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

    // return create
    public function _returnCreate($table,$model,$condition){
        // check hasAttribute
        $array_hasAttribute=$model->CheckFill();

        // get param post
        $put_request = file_get_contents('php://input');
        if($put_request!=''){
            // if json
            $arr = json_decode($put_request,true);
        }
        else{
            // if from data
            $arr=$_POST;
        }
        if(count($arr)>0){
            foreach($arr as $key=>$value){
                $key_convert=$this->_returnCheckUpperfield($key, $table);
                if(in_array($key_convert,$array_hasAttribute)){
                    $model->$key_convert=$value;
                }
            }
            if(count($model->getAttributes())>0)
            {
                try {
                    DB::beginTransaction();
                    $model->save();
                    $LastInsertId = $model->id;
                    DB::commit();
                    return $this->_returnView($LastInsertId,$model,'Model "'.$table.'"" successfully');

//                    return  $this->_return('','Model "'.$table.'"" successfully',true,200);
                } catch (QueryException $e) {
                    DB::rollback();
                    return  $this->_return('','Model "'.$table.'"" false, '.$e->getMessage(),false,200);
                }
            }
            else{
                return  $this->_return('','Model "'.$table.'"" attributes is empty',false,200);
            }
        }
    }

    // detail recode
    public function _returnView($id,$model, $mess='Successfully'){
        $array_push = array();
       if(is_numeric($id)==0)
       {
         return  $this->_return('', false, 'Id ' . $id . ' not integer', 200);
       }
        try {
            $data=$model->find($id);
            if(!empty($data))
            {
                $data=$data->toArray();
                $item = array(
                    'editable' => true,
                    'deletable' => true,
                    'exportable' => true,
                );
                array_push($array_push, $data + $item);
                return $this->_return($array_push,$mess,true,200);
            }
            else{
                return $this->_return('', false, 'Id ' . $id . ' not in the data base', 200);
            }
        } catch (QueryException $e) {
            return  $this->_return('',$e->getMessage(),false,200);
        }
    }


    // return login user
    public function _returnLogin($model, $username, $password){
        $condition='username = ? and password = ?';
        $value=array($username,$password);
        $data=$model::select('id','username','email')->whereRaw($condition, $value)->get()->toArray();
        if(count($data)>0){
            print_r($data);
        }
        else{
            return $this->_return('', false, 'The username or password does not exist', 401);
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

    //return key convert
    public function _returnCheckUpperfield($key, $table)
    {
        switch ($key) {
            case 'typeId_id':
                switch ($table) {
                    case 'Question':
                        $key_cv = 'type_id';
                        break;
                }
                break;
            default:
                $key_cv = $this->_returnconvertupperfield($key);
        }
        return $key_cv;
    }
    public function _returnconvertupperfield($string)
    {
        $kq = '';
        if (strlen($string) > 0) {
            for ($i = 0; $i < strlen($string); $i++) {
                if (ord($string[$i]) <= 90 && ord($string[$i]) >= 60) {
                    $kq .= '_' . strtolower($string[$i]);
                } else {
                    $kq .= $string[$i];
                }
            }
        }
        return $kq;
    }
}
