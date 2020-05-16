<?php
#check permision 
defined("BASEPATH") OR die("permision denided");

#redirect page
function redirect($url){
    header("Location: $url");
    die();
}
#errorcode message
function diePage($msg){
    echo $msg;
    die();
}
#true message code
function message($msg){
    echo "<span style='margin-left: 40%;color: red;font-size: 30;padding-right: ;'>$msg</span>";
} 
#check valid ajax for ajaxHandler.php
function isAjaxRequest(){
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        return true;
    }
    return false;
}
#dy&dump for print 
function dd($var){
    echo "<pre style='position: relative;background: #fff;padding: 10px;margin: 10px;border-radius: 5px;border-left: 3px solid red;z-index: 9999;>'";
    var_dump($var);
    echo "</pre>";
} 
#fixed url by constant SITE_URL
function baseurl($uri=''){
    return (SITE_URL . $uri);
}
