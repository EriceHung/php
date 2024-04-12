<?php
    session_start(); // 啟動會話

    unset($_SESSION["counter"]); // 重置計數器會話變數

    echo "counter重置成功...."; // 顯示重置成功訊息

    // 重定向到指定頁面
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";
?>
