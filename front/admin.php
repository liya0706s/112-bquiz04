<h2>管理員登入</h2>
<!-- table.all>tr*3>td.tt+td.pp>input:text -->
<table class="all">
    <tr>
        <td class="tt">帳號</td>
        <td class="pp"><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <td class="tt">密碼</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt">驗證碼</td>
        <td class="pp">
        <?php
        // 兩位數的亂數區間
        $a=rand(10,99);
        $b=rand(10,99);
        // SESSION比一班變數長久,伺服器端客戶看不到
        $_SESSION['ans']=$a+$b;
        echo $a . " + " .$b. " =";
        ?>
        <input type="text" name="ans" id="ans"></td>
    </tr>
</table>
<div class="ct"><button onclick="login('admin')">確認</button></div>

<script>
    function login(table){
        $.get('./api/chk_ans.php',{ans:$('#ans').val()},(chk)=>{
        // ans欄位是id ans的值
            if(parseInt(chk)==0){
                alert("驗證碼錯誤，請您重新輸入")
            }else{
                $.post("./api/chk_pw.php",
                {table,
                    acc:$("#acc").val(),
                    pw:$("#pw").val()},
                    (res)=>{
                    if(parseInt(res)==){
                        alert("帳號或密碼錯誤，請重新輸入")
                    }
                })
            }
    })
}
</script>