<?php

error_reporting(0); // 關閉錯誤顯示（通常只建議在正式環境使用）
session_start(); // 啟用 session 功能

// 檢查使用者是否已登入（session 裡有沒有 id）
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    // 三秒後跳轉回登入頁面
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else {    
    // 使用 mysqli_connect() 連接 MySQL 資料庫
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    // 建立 SQL 指令，從 POST 取得表單資料，插入到 user 資料表
    $sql = "INSERT INTO user(id, pwd) VALUES('{$_POST['id']}', '{$_POST['pwd']}')";

    // 執行 SQL 指令，如果失敗顯示錯誤訊息
    if (!mysqli_query($conn, $sql)) {
        echo "新增命令錯誤";
    }
    else {
        echo "新增使用者成功，三秒鐘後回到網頁";
        // 三秒後自動跳轉到使用者清單或主頁
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
}
?>
