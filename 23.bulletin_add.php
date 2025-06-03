<?php
    error_reporting(0);        // 關閉錯誤顯示（建議只在正式環境使用）
    session_start();           // 啟動 session，檢查用戶是否已登入

    // 如果用戶未登入，顯示登入提示並重定向到登入頁面
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉到登入頁
    }
    else {
        // 連接資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 執行 SQL 查詢，插入新佈告
        $sql = "INSERT INTO bulletin(title, content, type, time) 
        VALUES('{$_POST['title']}', '{$_POST['content']}', {$_POST['type']}, '{$_POST['time']}')";

        // 檢查 SQL 查詢是否成功
        if (!mysqli_query($conn, $sql)) {
            echo "新增命令錯誤";
        }
        else {
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; // 3 秒後跳轉
        }
    }
?>
