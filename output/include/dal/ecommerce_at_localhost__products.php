<?php
$dalTableproducts = array();
$dalTableproducts["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableproducts["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTableproducts["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTableproducts["price"] = array("type"=>14,"varname"=>"price", "name" => "price", "autoInc" => "0");
$dalTableproducts["image_url"] = array("type"=>200,"varname"=>"image_url", "name" => "image_url", "autoInc" => "0");
$dalTableproducts["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTableproducts["id"]["key"]=true;

$dal_info["ecommerce_at_localhost__products"] = &$dalTableproducts;
?>