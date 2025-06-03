<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    error_reporting(0);        // 關閉錯誤顯示（建議在正式環境使用）
    session_start();           // 啟動 session，確保使用者已登入

    // 如果未登入，顯示提示並跳轉到登入頁面
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉
    }
    else{   
        // 已登入，連接資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 根據 GET 參數 'id' 查詢使用者資料
        $result = mysqli_query($conn, "SELECT * FROM user WHERE id='{$_GET['id']}'");

        // 確認查詢是否成功，並取得使用者資料
        $row = mysqli_fetch_array($result);

        // 顯示修改表單，預填資料
        echo "
        <form method='post' action='20.user_edit.php'>
            <input type='hidden' name='id' value='{$row['id']}'> <!-- 隱藏帳號欄位，防止用戶修改 -->
            帳號：{$row['id']}<br> 
            密碼：<input type='text' name='pwd' value='{$row['pwd']}'><p></p> <!-- 顯示當前密碼 -->
            <input type='submit' value='修改'>
        </form>
        ";
    }
    ?>
    </body>
</html>
