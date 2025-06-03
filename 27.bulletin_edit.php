<?php
    // 設定錯誤報告為 0，隱藏錯誤訊息
    error_reporting(0);

    // 開始 PHP session，檢查使用者是否已登入
    session_start();

    // 檢查使用者是否登入
    if (!$_SESSION["id"]) {
        // 如果使用者沒有登入，顯示「請登入帳號」
        echo "請登入帳號";
        
        // 3 秒鐘後自動跳轉到登入頁面 (2.login.html)
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        // 如果使用者已登入，連接資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 使用 mysqli_query 執行更新資料庫的 SQL 語句
        // 更新 `bulletin` 表格的內容，其中使用了來自 POST 的參數
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
            // 如果更新失敗，顯示「修改錯誤」
            echo "修改錯誤";
            
            // 3 秒鐘後自動跳回佈告欄列表頁面 (11.bulletin.php)
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }else{
            // 如果更新成功，顯示「修改成功」
            echo "修改成功，三秒鐘後回到佈告欄列表";
            
            // 3 秒鐘後自動跳回佈告欄列表頁面 (11.bulletin.php)
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?>
