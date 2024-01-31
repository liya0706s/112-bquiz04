<h2 class="ct">商品分類</h2>
<div class="ct">
    新增大分類
    <input type="text" name="big" id="big">
    <button onclick="addType('big')">新增</button>
</div>
<div class="ct">
    新增中分類
    <select name="big" id="bigs"></select>
    <input type="text" name="mid" id="mid">
    <button onclick="addType('mid')">新增</button>
</div>
<!-- table.all>(tr.tt>td+td.ct>button*2)+(tr.tt.ct>td*2) -->
<table class="all">
    <tr class="tt">
        <th>流行皮件</th>
        <td class="ct">
            <button>修改</button>
            <button>刪除</button>
        </td>
    </tr>
    <tr class="pp ct">
        <td>女用皮件</td>
        <td>
            <button>修改</button>
            <button>刪除</button>
        </td>
    </tr>
</table>

<script>
    // 增加類別
    // 拿到大類別 big_id=0
    // big_id不為零 是中分類
    getTypes(0)

    function getTypes(big_id) {
        $.get("./api/get_types.php", {
            big_id
        }, (types) => {
            // 將拿回的type放進選單(#bigs)看是什麼格式，若是html()就長這樣
            $("#bigs").html(types)
        })
    }

    function addType(type) {
        let name
        let big_id;

        switch (type) {
            case 'big':
                name = $("#big").val();
                // 大分類的big_id==0;中分類big_id是該大分類的id
                big_id = 0;
                break;
            case 'mid':
                name = $("#mid").val();
                // 中分類的id是 bigs的value
                big_id = $("#bigs").val();
                break;
        }
        $.post("./api/save_type.php", {
            name,
            big_id
        }, () => {
            location.reload();
        })
    }
</script>

<h2 class="ct">商品管理</h2>
<div class="ct"><button>新增商品</button></div>
<table class="all">
    <tr class="tt ct">
        <td>編號</td>
        <td>商品名稱</td>
        <td>庫存量</td>
        <td>狀態</td>
        <td>操作</td>
    </tr>
    <tr class="pp">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <button>修改</button>
            <button>刪除</button>
            <button>上架</button>
            <button>下架</button>
        </td>
    </tr>
</table>