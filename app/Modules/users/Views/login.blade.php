<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 7/12/2016
 * Time: 9:06 AM
 */
?>

        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <style type="text/css">
        .error {
            width: 220px;
            height: 30px;
            background: #F25252;
            color: white;
            line-height: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
{{--<div class="error">Vui Lòng Nhập Username</div>--}}
@if(isset($errors)&&count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li>{!! $error !!}</li>
        @endforeach
    </ul>
@endif

<form action="" method="POST">
    <table>
        <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
        <tr>
            <td>Username</td>
            <td><input type="email" name="user"/></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pass"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btnLogin" value="Login"/></td>
        </tr>
    </table>
</form>
</body>
</html>
