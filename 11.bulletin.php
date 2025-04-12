<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請先登入";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from bulletin");
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        while ($row=mysqli_fetch_array($result)){
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
        }
        echo "</table>";
    
    }

?>


註解
<?php
    error_reporting(0);  // 關閉錯誤報告，避免顯示警告或錯誤信息

    session_start();  // 啟動會話，開始使用 session 管理用戶登入狀態

    // 檢查用戶是否已登入，若未登入則顯示提示訊息並重定向到登入頁面
    if (!$_SESSION["id"]) {
        echo "請先登入";  // 顯示未登入提示
        echo "<meta http-equiv='REFRESH' content='3; url=2.login.html'>";  // 3秒後重定向到登入頁面
    }
    else {
        // 顯示歡迎訊息，並提供登出、管理使用者、新增佈告的選項
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";

        // 建立資料庫連接
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 查詢所有佈告資料
        $result = mysqli_query($conn, "SELECT * FROM bulletin");

        // 顯示佈告資料表格
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";

        // 使用 while 循環遍歷查詢結果，並顯示每一條佈告的資訊
        while ($row = mysqli_fetch_array($result)) {
            // 提供「修改」和「刪除」的連結，並將佈告編號（bid）作為 URL 參數
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            
            // 顯示佈告的詳細資料
            echo $row["bid"];  // 顯示佈告編號
            echo "</td><td>";
            echo $row["type"];  // 顯示佈告類別
            echo "</td><td>";
            echo $row["title"];  // 顯示佈告標題
            echo "</td><td>";
            echo $row["content"];  // 顯示佈告內容
            echo "</td><td>";
            echo $row["time"];  // 顯示發佈時間
            echo "</td></tr>";
        }

        // 關閉表格標籤
        echo "</table>";
    }
?>
    
    }

?>
