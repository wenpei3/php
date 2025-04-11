<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   while ($row=mysqli_fetch_array($result)) {
     echo $row["id"]." ".$row["pwd"]."<br>";
   } 
?>


<?php
   # mysqli_connect() 用來建立與資料庫的連線
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   // 這裡使用了 db4free.net 資料庫伺服器，帳號和密碼是 'immust'，資料庫名稱是 'immust'

   # mysqli_query() 用來發送 SQL 查詢語句
   $result = mysqli_query($conn, "select * from user");  // 查詢 'user' 表格中的所有資料

   # mysqli_fetch_array() 用來從查詢結果中抓取資料
   while ($row = mysqli_fetch_array($result)) {  // 使用 while 迴圈遍歷所有查詢結果
     echo $row["id"] . " " . $row["pwd"] . "<br>";  // 顯示每筆資料的 id 和 pwd 欄位
   } 
?>
