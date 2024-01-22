<?php
// 如果不存在mem的話,就到login
if(!isset($_SESSION['mem'])){
to("?do=login");
}

?>