<?php


include '../bootstrap/init.php';

usleep(5000);
if(!isAjaxRequest()){
    diePage("Invalid Request");
}

$keyword = $_POST['keyword'];
if(!isset($keyword) or empty($keyword)){
    die('نتیجه ای یافت نشد ...');
}
$locations = getLocations(['keyword' =>$keyword]);
if(sizeof($locations) == 0 ){
    die('نتیجه ای یافت نشد ...');
}

# send header content type json
#echo json_encode($locations)
foreach($locations as $loc){
    echo "<a href='". SITE_URL ."?loc=$loc->id'><div class='result-item' data-lat='$loc->lat' data-lng='$loc->lng' data-loc='$loc->id'>
        <span class='loc-type'>".locationTypes[$loc->type]."</span>
        <span class='loc-title'>$loc->title</span>
</div></a>"; 
}


