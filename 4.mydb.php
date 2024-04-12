<?php
    // 使用 mysqli_connect() 建立資料庫連線
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    // 使用 mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user");
    // 使用 mysqli_fetch_array() 從查詢出來的資料一筆一筆取出
    $row=mysqli_fetch_array($result);
    // 顯示第一筆資料的 id 和 pwd
    echo $row["id"] . " " . $row["pwd"]."<br>"; 
    // 取得下一筆資料
    $row=mysqli_fetch_array($result);
    // 顯示第二筆資料的 id 和 pwd
    echo $row["id"] . " " . $row["pwd"];
?>
