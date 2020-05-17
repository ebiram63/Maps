<?php 
session_start();
#include page for clean code
include "constant.php";
include BASEPATH . "/libs/helpers.php";
include BASEPATH . "/bootstrap/config.php";
//include BASEPATH . "/vendor/autoload.php";


#connect to db
$dns = "mysql:dbname=$database_config->db;$database_config->host";
try {
    $pdo = new PDO($dns,$database_config->user,$database_config->password);
} catch (PDOException $e) {
    diePage ("connection filed" . $e->getMessage());
}
//echo "ok";

#include page for clean code

include BASEPATH . "/libs/lib-users.php";
include BASEPATH . "/libs/lib-locations.php";




