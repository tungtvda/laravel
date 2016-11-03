<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 7/1/2016
 * Time: 9:37 AM
 */
namespace App\Modules\Cates\Controllers;
use DB;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use App\Modules\Cates\Requests\CreateRequest;
//use App\Http\Controllers\Controller;
use App\Modules\Controller;
use App\Modules\Cates\Models\Cate;
use Illuminate\Support\Facades\View;

class CateController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Cate $model,Request $request)
    {
        $arr_name_action=array('index','store','show','update','destroy');
        $name_action= str_replace('api.cate.','',$request->route()->getName());
        if(in_array($name_action,$arr_name_action)){
//            return $this->_returnCheckToken();
        }

        $this->model = $model;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
                $data= $this->model->all()->toArray();
        return view('Cates::index')->with(['datas'=>$data,'count'=>6]);
        exit;
        $dk='id > ? ';
        $value=array('0');
        $field_oder='id';
        $order='DESC';
        $prevPageUrl=$nextPageUrl = $this->_returnLinkServer();
        return $this->_returnGetByAll('Cate',$this->model,$request,$dk,$value,$field_oder, $order,$nextPageUrl,$prevPageUrl);
//        $data= $this->model->all()->toArray();
//        return view('Cates::index')->with(['datas'=>$data,'count'=>6]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data= $this->model->all()->toArray();
        return view('Cates::add')->with(['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model       = $this->model;
        $condition='';
        return $this->_returnCreate('Cates',$model,$condition);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model       = $this->model;
        return $this->_returnView($id,$model);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function listBooking(Request $request)
    {
        if($request->has('modelId')&&$request->modelId!='')
        {
            $modelId=$request->modelId;
        }
        else{
            return $this->_return('','Not isset model id',false,200);
        }
        $dk='model_id = ?';
        $value=array($modelId);
        $data=$this->model->getByAll($dk,$value)->toArray();
        if(!empty($data))
        {
            return $this->_return($data,'Successfully',false,200);
        }
        else{
            return $this->_return('','Model is empty',true,200);
        }
    }
}