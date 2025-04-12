<?php
    session_start();
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;
    else
        $_SESSION["counter"]++;

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>



註解
<?php
    session_start();  // 啟動會話，開始使用 PHP session 來儲存資料

    // 如果 session 中尚未設定 "counter" 變數，則初始化為 1
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"] = 1;
    else
        $_SESSION["counter"]++;  // 如果已經存在，則每次訪問加 1

    // 顯示目前的 counter 值
    echo "counter=" . $_SESSION["counter"];
    echo "<br>";

    // 提供重置 counter 的連結
    echo "<a href='9.reset_counter.php'>重置counter</a>";
?>
