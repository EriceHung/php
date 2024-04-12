<?php
    error_reporting(0); // 關閉錯誤報告
    session_start(); // 啟動會話

    // 檢查用戶是否已登入
    if (!$_SESSION["id"]) {
        echo "請先登入"; // 如果未登入，顯示請先登入的訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 重定向到登入頁面
    }
    else{
        // 如果已登入，顯示歡迎訊息和相關操作鏈接
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";

        // 連接到資料庫
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        // 從資料庫查詢佈告資料
        $result=mysqli_query($conn, "select * from bulletin");
        // 顯示佈告資料的表格
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        // 使用 while 迴圈逐行顯示佈告資料
        while ($row=mysqli_fetch_array($result)){
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            echo $row["bid"]; // 顯示佈告編號
            echo "</td><td>";
            echo $row["type"]; // 顯示佈告類別
            echo "</td><td>"; 
            echo $row["title"]; // 顯示佈告標題
            echo "</td><td>";
            echo $row["content"]; // 顯示佈告內容
            echo "</td><td>";
            echo $row["time"]; // 顯示發佈時間
            echo "</td></tr>"; // 結束表格行
        }
        echo "</table>"; // 結束表格
    }
?>
