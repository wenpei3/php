<?php
    error_reporting(0);  // 關閉錯誤顯示（建議只在正式環境使用）
    session_start();      // 啟動 session，檢查用戶是否已登入

    // 如果用戶未登入，顯示登入提示並重定向到登入頁面
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉到登入頁
    }
    else{   
        // 連接資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 檢查資料庫連線是否成功
        if (!$conn) {
            die("資料庫連線錯誤：" . mysqli_connect_error());
        }

        // 使用 prepared statement 防止 SQL 注入
        $stmt = $conn->prepare("DELETE FROM bulletin WHERE bid=?");
        $stmt->bind_param("i", $_GET['bid']);  // 綁定參數，確保 bid 是整數

        // 執行刪除操作
        if (!$stmt->execute()) {
            echo "佈告刪除錯誤: " . $stmt->error;  // 顯示具體錯誤訊息
        } else {
            echo "佈告刪除成功";
        }

        // 關閉資料庫連接
        $stmt->close();
        $conn->close();

        // 三秒鐘後跳轉回佈告欄列表頁
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
    }
?>
