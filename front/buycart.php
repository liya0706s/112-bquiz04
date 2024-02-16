<?php
// 檢查是否存在會員 Session，如果不存在，將用戶導向登入頁面
if(!isset($_SESSION['mem'])){
to("?do=login");
}
// 在頁面上顯示會員的購物車標題
echo "<h2 class='ct'>{$_SESSION['mem']}的購物車</h2>";

// 如果未收到任何商品的 ID，顯示購物車中尚無商品的提示
if(!isset($_GET['id'])){
    echo "<h2 class='ct'>購物車中尚無商品</h2>";
}

// 如果收到了商品的 ID，將其添加到購物車中
if(isset($_GET['id'])){
     // 將商品的 ID 和數量添加到 Session 的購物車陣列中
    $_SESSION['cart'][$_GET['id']]=$_GET['qt'];
}

dd($_SESSION['cart']);
?>