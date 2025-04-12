<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   if ($login==TRUE)
     echo "登入成功";
  else
     echo "帳號/密碼 錯誤";
?>



註解
<?php
   # mysqli_connect() 用來建立與資料庫的連線
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   // 這裡使用的是 db4free.net 資料庫伺服器，帳號和密碼是 'immust'，資料庫名稱是 'immust'

   # mysqli_query() 用來發送 SQL 查詢語句
   $result = mysqli_query($conn, "select * from user");  // 查詢 'user' 表格中的所有資料

   # 設定一個變數來標記是否登入成功
   $login = FALSE;

   # 使用 while 迴圈遍歷所有查詢結果
   while ($row = mysqli_fetch_array($result)) {
     # 比對使用者提交的帳號和密碼是否和資料庫中的資料一致
     if (($_POST["id"] == $row["id"]) && ($_POST["pwd"] == $row["pwd"])) {
       $login = TRUE;  // 如果帳號和密碼匹配，設定登入成功
     }
   }

   # 根據登入標記顯示不同訊息
   if ($login == TRUE)
     echo "登入成功";  // 顯示登入成功訊息
   else
     echo "帳號/密碼 錯誤";  // 顯示登入失敗訊息
?>
