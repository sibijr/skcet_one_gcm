<?php
require_once('core/init.php');
$admin = new admin();
if(!input::exists()){
$db = DB::getInstance();
$bus = input::get('bus');
$result = $db->query_assoc("select lat,lon from users where `username` = '$bus';");
$result = $result->results();
if(isset($result)){
echo json_encode($result);
}else{
echo 'error fetching result';
}
}
?>
