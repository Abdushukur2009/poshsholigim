<?php

include '../../db.php';
// function asos()
// {
//     $db=new mysqli('localhost','root','','posholigim');

//     if($db->connect_errno <= 0){
//         $db->set_charset('utf8');
//     return $db;

//     }
//     else{
//         echo 'xato';
//     }
// }
if (isset($_POST['name'])) {
    $tr=trim($_POST['name'],' ');
$db=asos();
$db=$db->query("SELECT * FROM malumotlar WHERE email='{$tr}'");
if (isset($db->num_rows)&&$db->num_rows>0) {
  echo 0;
}
  else{
    echo 1;
 }
}

if(isset($_POST['u'])) {
  echo 'salom';
}
?>