<?php
require_once('../config/db.php');
require_once('../config/define.php');
require_once('../helper/functions.php');

$username = $_POST['username'];
$password = $_POST['password'];
$login_query = "SELECT * FROM admin WHERE email='".$username."' AND password='".$password."'";
$result = $conn->query($login_query) or die('error');
$result_row = $result->fetch_assoc();

$_SESSION['userid'] = $result_row['id'];
$_SESSION['role'] = 'admin';
$_SESSION['name'] = $result_row['username'];

if(@$result_row['id']){
  $reurndata = ["success"=>true,"msg"=>"successfully loggedin"];
  echo json_encode($reurndata);
}

?>
