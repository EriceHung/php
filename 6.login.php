<?php
   // 使用 mysqli_connect() 建立資料庫連線
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   // 使用 mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   // 使用 mysqli_fetch_array() 從查詢出來的資料一筆一筆取出
   $login=FALSE; // 初始登入狀態為 FALSE
   while ($row=mysqli_fetch_array($result)) {
     // 檢查使用者提交的帳號和密碼是否與資料庫中的任何一筆匹配
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE; // 如果匹配成功，設置登入狀態為 TRUE
     }
   } 
   // 根據登入狀態顯示登入結果
   if ($login==TRUE)
     echo "登入成功";
  else
     echo "帳號/密碼 錯誤";
?>
