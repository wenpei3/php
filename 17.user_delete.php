<?php
    error_reporting(0); // 關閉錯誤訊息（建議只在正式環境中使用）
    session_start(); // 啟動 session，確認是否登入

    // 如果 session 中沒有 id，代表尚未登入
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        // 3 秒後導向登入頁面
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {   
        // 連線到資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 組合 SQL 指令，從網址取得 id，執行刪除該使用者
        $sql = "DELETE FROM user WHERE id='{$_GET["id"]}'";
        // echo $sql; // 除錯用，可輸出 SQL 內容

        // 執行刪除，如果有錯誤顯示錯誤訊息
        if (!mysqli_query($conn, $sql)) {
            echo "使用者刪除錯誤";
        } else {
            echo "使用者刪除成功";
        }

        // 3 秒後跳轉回使用者頁面
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
?>
