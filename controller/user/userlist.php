<?php
require_once('../../config/db.php');
require_once('../../config/define.php');
require_once('../../helper/functions.php');

$userlist_query = "SELECT * FROM users";
$result = $conn->query($userlist_query) or die('error');
$userlist = [];
while($result_row = $result->fetch_assoc()){
    $userlist[]=['name'=>$result_row['name'],'email'=> $result_row['email'],'address'=>$result_row['address'],'city'=>$result_row['city'],'status'=>$result_row['status']];
}



if(count($userlist)>0){
  $reurndata = ["success"=>true,"data"=>json_encode($userlist),"msg"=>"Getting User List"];
  echo json_encode($reurndata);
}



?>
