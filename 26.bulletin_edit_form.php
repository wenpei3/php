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

        // 查詢指定的佈告資料
        $result = mysqli_query($conn, "SELECT * FROM bulletin WHERE bid={$_GET['bid']}");
        $row = mysqli_fetch_array($result);

        // 根據佈告的類型選擇預設值
        $checked1 = "";
        $checked2 = "";
        $checked3 = "";
        if ($row['type'] == 1) $checked1 = "checked";
        if ($row['type'] == 2) $checked2 = "checked";
        if ($row['type'] == 3) $checked3 = "checked";

        // 顯示表單，讓用戶修改佈告資料
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=27.bulletin_edit.php>
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    標    題：<input type=text name=title value=\"{$row['title']}\"><br>
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value=\"{$row['time']}\"><p></p>
                    <input type=submit value=修改佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
    }
?>
