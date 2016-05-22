<?php
require_once('core/init.php');
$admin = new admin();
if(!input::exists()){
$db = DB::getInstance();
$bus = input::get('bus');
$lat = input::get('lat');
$lon = input::get('lon');
$result = $db->query_assoc("update users set `lat` = '$lat',`lon` = '$lon' where `username` = '$bus';");
}
?>
