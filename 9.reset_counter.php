<?php
    session_start();
    unset($_SESSION["counter"]);
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";

?>


註解
<?php
    session_start();  // 啟動會話，開始使用 PHP 會話管理

    unset($_SESSION["counter"]);  // 清除 "counter" 變數，達到重置計數器的效果

    // 顯示「重置成功」的訊息
    echo "counter重置成功....";

    // 使用 meta 標籤進行頁面重定向，2秒後跳轉回原來的頁面
    echo "<meta http-equiv='REFRESH' content='2; url=8.counter.php'>";
?>
