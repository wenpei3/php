<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234"))
        echo "登入成功";
    else
        echo "登入失敗";
?>



註解
<?php 
    // 檢查使用者輸入的帳號和密碼是否與預設的值匹配
    if (($_POST["id"] == "john") && ($_POST["pwd"] == "john1234"))
        echo "登入成功";  // 如果帳號是 'john' 且密碼是 'john1234'，顯示登入成功
    else
        echo "登入失敗";  // 否則顯示登入失敗
?>
