<?php
    error_reporting(0);
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    $result=mysqli_query($conn, "select * from bulletin");
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
    while ($row=mysqli_fetch_array($result)){
        echo "<tr><td>";
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
    echo "</table>"
?>

<?php
    error_reporting(0);  // 關閉錯誤顯示，防止顯示程式錯誤資訊

    // 建立與資料庫的連線
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    // 查詢 bulletin 表格中的所有資料
    $result = mysqli_query($conn, "SELECT * FROM bulletin");

    // 輸出表格的開頭
    echo "<table border='2'><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";

    // 遍歷查詢結果並顯示每一筆資料
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr><td>";  // 顯示每一列資料
        echo $row["bid"];  // 佈告編號
        echo "</td><td>";
        echo $row["type"];  // 佈告類別
        echo "</td><td>"; 
        echo $row["title"];  // 標題
        echo "</td><td>";
        echo $row["content"];  // 佈告內容
        echo "</td><td>";
        echo $row["time"];  // 發佈時間
        echo "</td></tr>";
    }

    // 結束表格
    echo "</table>";
?>
