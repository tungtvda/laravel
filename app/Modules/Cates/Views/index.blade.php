<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 7/13/2016
 * Time: 10:10 AM
 */
?>
@extends('Admin::master')
@section('content')
    <a href="cate/create">Create category</a>
<ul>
    @foreach($datas as $data)
    <li> <a href="">{!! $data['name'] !!}</a></li>
        @endforeach
</ul>
@endsection