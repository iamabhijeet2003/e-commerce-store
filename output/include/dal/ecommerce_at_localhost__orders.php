<?php
$dalTableorders = array();
$dalTableorders["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableorders["user_id"] = array("type"=>3,"varname"=>"user_id", "name" => "user_id", "autoInc" => "0");
$dalTableorders["total_amount"] = array("type"=>14,"varname"=>"total_amount", "name" => "total_amount", "autoInc" => "0");
$dalTableorders["status"] = array("type"=>129,"varname"=>"status", "name" => "status", "autoInc" => "0");
$dalTableorders["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTableorders["id"]["key"]=true;

$dal_info["ecommerce_at_localhost__orders"] = &$dalTableorders;
?>