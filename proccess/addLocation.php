<?php


include '../bootstrap/init.php';

if(!isAjaxRequest()){
    diePage("Invalid Request");
}

// request is Ajax Ok
if(insertLocation($_POST)){
    echo "موقعیت با موفقیت در پایگاه داده ثبت شد و منتظر تایید مدیر است";
}else{
    echo "مشگلی در ثبت مکان ایجاد شده است";
}
