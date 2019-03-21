<?php
include("../includes/config.php");
session_start();
include("../includes/classes.php");
include(getLanguage(null, (!empty($_GET['lang']) ? $_GET['lang'] : $_COOKIE['lang']), 2));
$db = new mysqli($CONF['host'], $CONF['user'], $CONF['pass'], $CONF['name']);
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
$db->set_charset("utf8");

$resultSettings = $db->query(getSettings()); 
$settings = $resultSettings->fetch_assoc();

$messagelist = getMessageToPush($db);
foreach ($messagelist as $item){
    $useridlist = getUserListToPush($item,$db);
    foreach($useridlist as $userid){
        $query = 'insert into `notifications` (`from`,`to`,`parent`,`type`,`read`) values('.$item["uid"].','.$userid.','.$item["id"].',100,0)';
        $result = $db->query($query);
    }
}
function getMessageToPush($db){

    $time = time();
    $limittime = date('Y-m-d H:i:s',$time-3600);
    $query = "select * from messages where public = 3 and time >= '".$limittime."'";
    $result = $db->query($query);
    $re = array();
    while($tmp = $result->fetch_assoc()){
        $re[] = $tmp;
    }
    return $re;
}
function getUserListToPush($message,$db){
    $useridlist = array();
    $time = time();
    $query = "select * from users where online >= $time-3600";
    $result = $db->query($query);
    $re = array();
    while($tmp = $result->fetch_assoc()){
        $re[] = $tmp;
    }
    foreach ($re as $item){
        if($item["idu"]==$message["uid"]){
            continue;
        }
        if(getDistance($message["latitude"],$message["longitude"],$item["lastloginlat"],$item["lastloginlong"])<500){
            $useridlist[] = $item["idu"];
        }
    }

    return $useridlist;
}
function getDistance($lat1,$lng1,$lat2,$lng2){
    $radLat1 = deg2rad($lat1); //deg2rad()函数将角度转换为弧度
    $radLat2 = deg2rad($lat2);
    $radLng1 = deg2rad($lng1);
    $radLng2 = deg2rad($lng2);
    $a = $radLat1 - $radLat2;
    $b = $radLng1 - $radLng2;
    $s = 2 * asin(sqrt(pow(sin($a / 2), 2) + cos($radLat1) * cos($radLat2) * pow(sin($b / 2), 2))) * 6378.137 * 1000;
    return $s;
}
mysqli_close($db);
?>