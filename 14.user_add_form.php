<html>
    <head><title>新增使用者</title></head> <!-- 頁面標題為「新增使用者」 -->
    <body>
<?php        
    error_reporting(0); // 關閉錯誤訊息顯示，避免顯示 PHP 警告或錯誤
    session_start(); // 啟動 session，用來追蹤使用者登入狀態

    if (!$_SESSION["id"]) { // 如果 session 中沒有 "id"，表示尚未登入
        echo "請登入帳號"; // 提示使用者需要登入
        // 3 秒後自動跳轉到登入頁面 2.login.html
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else { // 如果已登入（session 有 id）
        // 顯示新增使用者的表單
        echo "
            <form action=15.user_add.php method=post>
                帳號：<input type=text name=id><br> <!-- 輸入使用者帳號 -->
                密碼：<input type=text name=pwd><p></p> <!-- 輸入密碼 -->
                <input type=submit value=新增> <input type=reset value=清除> <!-- 提交與清除按鈕 -->
            </form>
        ";
    }
?>
    </body>
</html>
