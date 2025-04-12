<?php
    session_start();
    unset($_SESSION["id"]);
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";

?>


註解
<?php
    // 啟動會話，這樣可以存取 session 變數
    session_start();

    // 刪除 session 中的 "id" 變數，實現登出
    unset($_SESSION["id"]);

    // 顯示登出成功訊息
    echo "登出成功....";

    // 使用 meta 標籤在 3 秒後自動重定向到登入頁面
    echo "<meta http-equiv='REFRESH' content='3; url=2.login.html'>";
?>
