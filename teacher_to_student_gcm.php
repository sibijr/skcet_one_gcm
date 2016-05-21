<?php
require_once 'core/init.php';

if(input::exists()){
				
						$id_array = input::get('id');
						$query = "select gcm_id from users where id = ". implode(' or id = ',$id_array) . ";";
						$db = DB::getInstance();
						$result = $db->query_assoc($query);
						$result = $result->results();
					//	print_r($result);
						$gcm=new GCM();
						$messages = input::get('message');
						
						foreach($result as $id){
						$id = array($id['gcm_id']);
						$message = array("price"=>$messages);
						$result = $gcm->send_notification($id,$message);
						}
							

}
?>