<?php
   // 使用 mysqli_connect() 建立資料庫連線
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   // 使用 mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   // 使用 mysqli_fetch_array() 從查詢出來的資料一筆一筆取出
   $login=FALSE; // 初始化登入狀態為 FALSE
   while ($row=mysqli_fetch_array($result)) {
     // 檢查使用者提交的帳號和密碼是否與資料庫中的任何一筆匹配
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE; // 如果匹配成功，設置登入狀態為 TRUE
     }
   } 
   if ($login==TRUE) {
    // 如果登入成功，啟動會話，並將使用者 ID 存儲在會話中
    session_start();
    $_SESSION["id"]=$_POST["id"];
    echo "登入成功";
    // 重定向到佈告欄頁面
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   }

  else{
    // 如果帳號或密碼錯誤，顯示錯誤訊息並重定向到登入頁面
    echo "帳號/密碼 錯誤";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
  }
?>
