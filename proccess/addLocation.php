<?php


include '../bootstrap/init.php';

if(!isAjaxRequest()){
    diePage("Invalid Request");
}

// request is Ajax Ok