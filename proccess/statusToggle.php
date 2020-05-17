<?php


include '../bootstrap/init.php';

if(!isAjaxRequest()){
    diePage("Invalid Request");
}

if(is_null($_POST['loc']) or !is_numeric($_POST['loc'])){
    echo "Invalid location";
    die();
}
// request is Ajax Ok
$location_id = $_POST['loc'] ?? null;
echo toggleStatus($_POST['loc']);
