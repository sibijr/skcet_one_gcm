<?php
require_once 'core/init.php';	
echo 'ok';	
$admin=new admin_process();
		$fileName = $_FILES['fileToUpload']['name'];
		$allowed =  array('xls','xlsx','XLS','XLSX');
		$ext = pathinfo($fileName, PATHINFO_EXTENSION);
if(in_array($ext,$allowed)){
$admin->add_user_using_excel_sheet($_FILES['fileToUpload']['tmp_name']);
}else{
	session::flash('home','Please upload xls and xlsx format only');
	redirect::to('index.php');
}
?>