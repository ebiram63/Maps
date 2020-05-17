<?php 

function insertLocation($data){
    global $pdo;
    // validation here ....
   $sql =  "INSERT INTO `location` (`title`, `lat`, `lng`, `type`) VALUES ( :title, :lat, :lng , :type )";
    $stmt = $pdo->prepare($sql);
    $stmt ->execute([':title'=>$data['title'],'lat'=>$data['lat'],'lng'=>$data['lng'],'type'=>$data['type']]);
    return $stmt->rowCount();
}

function getLocations(){
    
}