<?php
    error_reporting(0); // 關閉錯誤報告
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); // 連接到資料庫
    $result=mysqli_query($conn, "select * from bulletin"); // 從資料庫查詢佈告資料
    // 顯示佈告資料的表格
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
    // 使用 while 迴圈逐行顯示佈告資料
    while ($row=mysqli_fetch_array($result)){
        echo "<tr><td>"; // 開始新的表格行
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
?>
