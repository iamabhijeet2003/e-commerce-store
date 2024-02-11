<?php
$dalTableorder_details = array();
$dalTableorder_details["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableorder_details["order_id"] = array("type"=>3,"varname"=>"order_id", "name" => "order_id", "autoInc" => "0");
$dalTableorder_details["product_id"] = array("type"=>3,"varname"=>"product_id", "name" => "product_id", "autoInc" => "0");
$dalTableorder_details["quantity"] = array("type"=>3,"varname"=>"quantity", "name" => "quantity", "autoInc" => "0");
$dalTableorder_details["price"] = array("type"=>14,"varname"=>"price", "name" => "price", "autoInc" => "0");
$dalTableorder_details["id"]["key"]=true;

$dal_info["ecommerce_at_localhost__order_details"] = &$dalTableorder_details;
?>