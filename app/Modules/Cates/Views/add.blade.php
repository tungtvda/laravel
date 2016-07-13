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
<div class="col-md-12">
    @if(isset($errors)&&count($errors)>0)
        <ul>
            @foreach($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    @endif
    <form action="" method="post">
        <table>
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <tr>
                <td>Category </td>
                <td>
                   <select name="parent_id">
                       <?php _returnParentId($data, 'id','name') ?>
                   </select>
                </td>
            </tr>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>Alias</td>
                <td>
                    <input type="text" name="alias" >
                </td>
            </tr>
            <tr>
                <td>Order</td>
                <td>
                    <input type="number" name="order" >
                </td>
            </tr>
            <tr>
                <td>Keywords</td>
                <td>
                    <input type="text" name="keywords" >
                </td>
            </tr>
            <tr>
                <td>Description</td>
                <td>
                    <input type="text" name="description" >
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Thêm" >
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection
