<?php
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password1=$_POST['password1'];
    $email=$_POST['email'];
    $age=(int)$_POST['age'];
    $verify=$_POST['verify'];
    $verify1=$_POST['verify1'];

    //1.判斷用戶名首字母是否為英文
    $char=$username{0};
    $ascii=ord($char);
    if(($ascii>=98 && $ascii<=122) || ($ascii>=65 && $ascii<=90)){
        //2.判斷用戶名長度是否符合規範
        $userlen=strlen($username);
        if($userlen>=5 && $userlen<=10){
            //3.判斷密碼是否為空
            $pwlen=strlen($password);
            if($pwlen>0){
                //4.判斷兩次密碼是否一致
                if($password===$password1){
                    //5.信箱是否有@
                    if(strpos($email,'@')!==false){
                        //6.驗證年齡
                        if($age>=9 && $age<=100){
                            //7.驗證碼是否一致
                            if($verify===$verify1){
                                echo "恭喜您".$username."註冊成功<br>";
                                echo '3秒後返回登入頁面';
                                header("refresh:3;url=reg.php");
                                
                            }else{
                                echo "驗證碼錯誤<br>";
                            }
                        }else{
                            echo "年齡不符合規範<br>";
                        }
                    }else{
                        echo "請輸入正確email<br>";
                    }
                }else{
                    echo "密碼不一致<br>";
                }
            }else{
                echo "密碼不能為空<br>";
            }
        }else{
            echo "{$username}長度不符<br>";
        }
    }else{
        echo "{$username}用戶名非英文開頭<br>";
    }



?>