<?php 

function insertLocation($data){
    global $pdo;
    // validation here ....
   $sql =  "INSERT INTO `location` (`title`, `lat`, `lng`, `type`) VALUES ( :title, :lat, :lng , :type )";
    $stmt = $pdo->prepare($sql);
    $stmt ->execute([ ':title'=>$data['title'],'lat'=>$data['lat'],'lng'=>$data['lng'],'type'=>$data['type']]);
    return $stmt->rowCount();
};

function getLocations($params = []){
    global $pdo;
    $condition = ' ' ;
    if(isset($params['verified']) and in_array($params['verified'],['0','1'])){
        $condition = "WHERE verified = {$params['verified']}";
    }
    $sql =  "SELECT * FROM `location` $condition";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

// for show location in preview in panel
function getLocation($id){
    global $pdo;
    $sql =  "SELECT * FROM `location` where id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id'=>$id]);
    return $stmt->fetch(PDO::FETCH_OBJ);
}

// for show location in preview in panel
function toggleStatus($id){
    global $pdo;
    $sql =  "UPDATE `location` SET `verified` = 1 - verified WHERE `id` = :id;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id'=>$id]);
    return $stmt->rowCount();
}