<?php
require_once('core/init.php');
$admin = new admin();

$db = DB::getInstance();
$grp1 = '9';
$result = $db->query_assoc("select name from users where `group` = '9';");
$result = $result->results();
//print_r($result);
if(isset($result)){
echo json_encode($result);
}else{
echo 'error fetching result';
}

?>
