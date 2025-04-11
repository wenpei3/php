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
   if ($login==TRUE) {
    session_start();
    $_SESSION["id"]=$_POST["id"];
    echo "登入成功";
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   }

  else{
    echo "帳號/密碼 錯誤";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
  }
?>

<?php
   # mysqli_connect() 建立資料庫連結
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

   # mysqli_query() 從資料庫查詢資料
   $result = mysqli_query($conn, "SELECT * FROM user");

   # 設定登入狀態為預設 FALSE
   $login = FALSE;

   # 使用 while 循環來遍歷資料庫查詢結果
   while ($row = mysqli_fetch_array($result)) {
     # 檢查帳號和密碼是否匹配
     if (($_POST["id"] == $row["id"]) && ($_POST["pwd"] == $row["pwd"])) {
       $login = TRUE;
     }
   }

   # 檢查是否登入成功
   if ($login == TRUE) {
     # 登入成功，開始會話並設置 session 變數
     session_start();
     $_SESSION["id"] = $_POST["id"];  // 將帳號儲存到 session 中

     # 顯示登入成功訊息
     echo "登入成功";
     
     # 使用 meta 標籤進行頁面重定向，3秒後跳轉到 11.bulletin.php
     echo "<meta http-equiv='REFRESH' content='3; url=11.bulletin.php'>";
   } else {
     # 登入失敗，顯示錯誤訊息
     echo "帳號/密碼 錯誤";

     # 使用 meta 標籤進行頁面重定向，3秒後跳轉回 2.login.html
     echo "<meta http-equiv='REFRESH' content='3; url=2.login.html'>";
   }
?>
