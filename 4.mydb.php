<?php
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user");
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"]."<br>"; 
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"];
?>

<?php
    # mysqli_connect() 用來建立與資料庫的連線
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    // 參數說明：
    // "db4free.net" 這是資料庫伺服器的地址
    // "immust" 是資料庫的使用者名稱
    // "immustimmust" 是資料庫的密碼
    // "immust" 是資料庫的名稱

    # mysqli_query() 用來向資料庫發送 SQL 查詢
    $result = mysqli_query($conn, "select * from user");  // 查詢 'user' 表格中的所有資料
    
    # mysqli_fetch_array() 用來從查詢結果中一筆一筆抓取資料
    $row = mysqli_fetch_array($result);  // 取得查詢結果的第一筆資料
    echo $row["id"] . " " . $row["pwd"] . "<br>";  // 輸出 id 和 pwd 欄位的值

    # 再次抓取下一筆資料
    $row = mysqli_fetch_array($result);  // 取得查詢結果的第二筆資料
    echo $row["id"] . " " . $row["pwd"];  // 輸出 id 和 pwd 欄位的值
?>
