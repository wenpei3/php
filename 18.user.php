<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0); // 關閉錯誤訊息
        session_start();    // 啟動 session

        // 如果未登入，跳轉到登入頁面
        if (!$_SESSION["id"]) {
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        }
        else {
            // 使用者已登入，顯示管理功能與列表
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] 
                [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";

            // 連線資料庫
            $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

            // 執行查詢所有使用者資料
            $result = mysqli_query($conn, "SELECT * FROM user");

            // 逐筆輸出每位使用者資料
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>
                        <td>
                            <a href=19.user_edit_form.php?id={$row['id']}>修改</a>||
                            <a href=17.user_delete.php?id={$row['id']}>刪除</a>
                        </td>
                        <td>{$row['id']}</td>
                        <td>{$row['pwd']}</td>
                    </tr>";
            }
            echo "</table>";
        }
    ?> 
    </body>
</html>
