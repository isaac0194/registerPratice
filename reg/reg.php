<?php
    $string="1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
    $code='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string{mt_rand(0,strlen($string)-1)}.'</span>'; 
    $code.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string{mt_rand(0,strlen($string)-1)}.'</span>'; 
    $code.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string{mt_rand(0,strlen($string)-1)}.'</span>'; 
    $code.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string{mt_rand(0,strlen($string)-1)}.'</span>'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊頁面</title>
</head>
<body>
    <h2>超級英雄申請表</h2>
    <form action="doReg.php" method="post">
        <table style="border:3px #FFD382 dashed;" cellpadding="10" border='1' width="80%">
            <tr>
                <td align="center">用戶名</td>
                <td><input type="text" name="username" id="" placeholder="請輸入用戶名"> 以英文字母開頭，長度5~10字元</td>
            </tr>
            <tr>
                <td align="center">密碼</td>
                <td><input type="password" name="password" id="" placeholder="請輸入密碼"> 密碼不得為空</td>
            </tr>
           <tr>
               <td align="center">確認密碼</td>
               <td><input type="password" name="password1" id=""> 兩次密碼要一致</td>
           </tr>
           <tr>
               <td align="center">電子信箱</td>
               <td><input type="email" name="email" id=""> 請輸入電子信箱</td>
           </tr>
           <tr>
               <td align="center">年齡</td>
               <td><input type="number" name="age" id=""> 年齡範圍9~100之間</td>
           </tr>
           <tr>
               <td align="center">驗證碼</td>
               <td><b><input type="text" name="verify" id=""> <?php echo $code; ?></b>
                    <input type="hidden" name="verify1" value='<?php echo strip_tags($code); ?>'>
               </td>
           </tr>
           <tr>
               <td colspan="2"><input type="submit" value="註冊"></td>
           </tr>
        </table>
    </form>
</body>
</html>