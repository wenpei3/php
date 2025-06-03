<?php
    error_reporting(0);        // 關閉錯誤顯示（建議只在正式環境使用）
    session_start();           // 啟動 session，檢查用戶是否已登入

    // 如果用戶未登入，顯示登入提示並重定向到登入頁面
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉到登入頁
    }
    else {   
        // 已登入，連接資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 執行 SQL 更新命令，更新密碼
        if (!mysqli_query($conn, "UPDATE user SET pwd='{$_POST['pwd']}' WHERE id='{$_POST['id']}'")) {
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; // 3 秒後返回到用戶列表頁
        } else {
            echo "修改成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; // 3 秒後返回
        }
    }
?>
