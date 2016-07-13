<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 7/1/2016
 * Time: 9:37 AM
 */
namespace App\Modules\Cates\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Modules\Cates\Requests\CreateRequest;
//use App\Http\Controllers\Controller;
use App\Modules\Controller;
use App\Modules\Cates\Models\Cate;

class CateController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Cate $model)
    {
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
        return view('Cates::index')->with('datas',$data);
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
    public function store(CreateRequest $request)
    {
        //
        $data       = $this->model;
        if ($request->has('name')&&$request->name!='') {
            $data->name=$request->name;
        }
        if ($request->has('parent_id')&&$request->parent_id!='') {
            $data->parent_id=$request->parent_id;
        }
        if ($request->has('alias')&&$request->alias!='') {
            $data->alias=$request->alias;
        }
        if ($request->has('order')&&$request->order!='') {
            $data->order=$request->order;
        }
        if ($request->has('order')&&$request->order!='') {
            $data->order=$request->order;
        }
        if ($request->has('keywords')&&$request->keywords!='') {
            $data->keywords=$request->keywords;
        }
        if ($request->has('description')&&$request->description!='') {
            $data->description=$request->description;
        }
        try {
            $data->save();
            return redirect('admin/cate')->with(['flash_message'=>'Successfully']);
        } catch (QueryException $e) {
//            return response()->json(['message' => $e->getMessage()], 403);
            return $this->_return($data,$e->getMessage(),false,200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data=$this->model->find($id);
            if(!empty($data))
            {
            }
            return $this->_return($data,'Successfully',true,200);
        } catch (QueryException $e) {
            return response()->json(['message' => 'Not found'], 404);
        }

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