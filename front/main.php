<?php

// $type=0;
// if(isset($_GET['type'])){
// $type=$_GET['type'];
// }

$type = $_GET['type'] ?? 0;
$nav = '';
$goods = null;

if ($type == 0) {
    $nav = "全部商品";
    $goods=$Goods->all(['sh'=>1]);
} else {
    $t = $Type->find($type);
    // 分類大分類還是中分類
    if ($t['big_id'] == 0) {
        $nav = $t['name'];
        // 把所有商品撈出來
        $goods = $Goods->all(['sh' => 1, 'big' => $t['id']]);
    } else {
        $b = $Type->find($t['big_id']);
        $nav = $b['name'] . " > " . $t['name'];
        $goods = $Goods->all(['sh' => 1, 'mid' => $t['id']]);
    }
}

?>

<h2><?= $nav; ?></h2>
<?php
foreach ($goods as $good) {
    // echo $good['name'];
    // echo "<br>";
    ?>
<div class="item">
    <div class="img">
        <img src="<?=$good['img'];?>" alt="" style="width:200px;height:150px">
    </div>
    <div class="info">
        <div class="ct tt"><?=$good['name'];?></div>
        <div>價錢:<?=$good['price'];?></div>
        <div>規格:<?=$good['spec'];?></div>
        <div>簡介:<?=$good['intro'];?></div>
    </div>
</div>
    <?php
}
?>