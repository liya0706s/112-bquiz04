<?php
include_once 'db.php';

// table目的是要有db
$table=$_POST['table'];
unset($_POST['table']);
$db=new DB($table);
$chk=$db->count($_POST);
// echo $Mem->count(['acc'=>$_GET['acc']]);
// count只有1 or 0

// php有值除了0, 其他都是true
if($chk){
    echo $chk;
    $_SESSION[$table]=$_POST['acc'];
}else{
    echo $chk;
}
?>