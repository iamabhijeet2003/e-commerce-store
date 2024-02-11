<?php
$dalTableusers = array();
$dalTableusers["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableusers["username"] = array("type"=>200,"varname"=>"username", "name" => "username", "autoInc" => "0");
$dalTableusers["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTableusers["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTableusers["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTableusers["id"]["key"]=true;

$dal_info["ecommerce_at_localhost__users"] = &$dalTableusers;
?>