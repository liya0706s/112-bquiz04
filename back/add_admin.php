<h2 class="ct">新增管理帳號</h2>
<!-- table.all>tr*3>td.tt.ct+td.pp>input:text -->
<table class="all">
    <tr>
        <td class="tt ct">帳號</td>
        <td class="pp"><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="text" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt ct">權限</td>
        <td class="pp">
            <div><input type="checkbox" name="pr[]" value="1">
                商品分類與管理
            </div>
            <div><input type="checkbox" name="pr[]" value="2">
                訂單管理
            </div>
            <div><input type="checkbox" name="pr[]" value="3">
                會員管理
            </div>
            <div><input type="checkbox" name="pr[]" value="4">
                頁尾版權區管理
            </div>
            <div><input type="checkbox" name="pr[]" value="5">
        
        </div>
        </td>
    </tr>
</table>