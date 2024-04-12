<?php
    session_start(); // 啟動會話

    // 檢查是否已設置計數器計數值
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1; // 如果沒有設置，則初始化為 1
    else
        $_SESSION["counter"]++; // 如果已設置，則增加計數值

    // 顯示計數器計數值
    echo "counter=".$_SESSION["counter"];

    // 顯示重置連結
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>
