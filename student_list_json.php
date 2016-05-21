<?php
require_once('core/init.php');

if(input::exists()){

$db = DB::getInstance();
echo $reg_no1 = input::get('reg_no');
$result1 = $db->query_assoc("select * from users where `reg_no` = '$reg_no1';");
$result1 = $result1->first();
echo $staff_id =  $result1['reg_no'];
echo $batch = $result1['batch'];
echo $department = $result1['department'];
$year = $result1['year'];
$section = $result1['section'];
$result = $db->query_assoc("select id,roll_no,name from users where `batch` = '$batch' and `department` = '$department' and `year` = '$year' and `section` = '$section' and `group` = '1';");
$result = $result->results();
if(isset($result)){
echo json_encode($result);
}else{
echo 'error fetching result';
}
}

?>

<form method = "post" action = "">
<input type="text" name="reg_no" />
<input type="submit" />
</form>