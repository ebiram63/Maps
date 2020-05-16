<?php 

$mysqli = new mysqli("localhost","root","","7map");
if($mysqli->errno){
    echo "not connected".$mysqli->connect_errno;
    exit;
}
echo "ok";