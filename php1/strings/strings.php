<?php

$indexPage = '<a href="../index.html">На главную</a><br>';
echo $indexPage;

if (isset($_GET['task'])) {
    $taskNo = $_GET['task'];

    switch ($taskNo) {
        case "1";
            $login = 'Mikhail';
            echo "Вы вошли под именем $login";
            break;
        case "2";
            $num1 = 4;
            $num2 = 5;
            echo $num1 * $num1 + $num2 * $num2;
            break;
        case "3";
            $s = 1200;
            $t = 60;
            $v1 = $s / $t;
            $v2 = $v1 * 1000 / 3600;
            echo 'Км/ч: ' . round($v1, 2), '<br>';
            echo 'М/с: ' . round($v2, 2);
            break;
        case "4";
            define("test", 100);
            echo test, '<br>';
            define("test", 101);
            echo test;
            break;
    }
}