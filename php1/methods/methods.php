<?php

function task1($arg = 'Гость') {
    echo "Привет $arg";
}

function task2() {
    echo 'before<br>';
    $cities = ['Moscow', 'New-York', 'Helsinki'];
    var_dump($cities);
    sort($cities);
    echo 'after<br>';
    var_dump($cities);
}

function task3($str, $mode) {
    switch ($mode) {
        case 'up':
            return strtoupper($str);
            break;
        case 'low':
            return strtolower($str);
            break;
        case 'first':
            $newStr = strtolower($str);
            return ucwords($newStr);
            break;
    }

}

function task4 () {
    echo strip_tags("<h1>Hello, world!</h1>");
}

$indexPage = '<a href="../index.html">На главную</a><br>';
echo $indexPage;

if (isset($_GET['task'])) {
    $taskNo = $_GET['task'];

    switch ($taskNo) {
        case "1";
            task1();
            echo '<br>';
            task1('Михаил');
            break;
        case "2";
            task2();
            break;
        case "3";
            $tmp = task3('HELLO WORLD', 'first');
            echo $tmp;
            break;
        case "4";
            task4();
            break;
    }
}