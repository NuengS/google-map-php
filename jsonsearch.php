<?php

include("mysql.php");
$mysql = new J_MYSQL;
$mysql->J_Connect();
$mysql->set_char_utf8();

$sql = "select * from tbl_location";
$rs = $mysql->J_Execute($sql);
$arr = array();

foreach($rs as $read){
    $arr2 = array();
    $arr2["id"] = $read["id"];
    $arr2["lat"] = $read["lat"];
    $arr2["lng"] = $read["lng"];
    $arr2["location_name"] = $read["location_name"];
    $arr2["location_detail"] = $read["location_detail"];
    $arr2["image_name"] = $read["image_name"];
    array_push($arr,$arr2);
}
echo json_encode($arr);

$mysql->J_Close();


?>