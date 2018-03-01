<?php

$indexPage = '<a href="../index.html">На главную</a><br>';
echo $indexPage;

if (isset($_GET['task'])) {
    $taskNo = $_GET['task'];

    switch ($taskNo) {
        case "1";
            echo "Задание 1";
            break;
        case "2";
            $arr2_1 = [3, 1, 6, 0, 4, 5];
            $res2_1 = 0;
            foreach ($arr2_1 as $item) {
                $res2_1 += $item * $item;
            }
            echo "Сумма квадратов: $res2_1";
            break;
        case "3";
            for ($i = 1; $i < 10; $i++) {
                for ($j = 0; $j < 10; $j++) {
                    echo $i * $j, ' ';
                }
                echo '<br>';
        }
            break;
        case "4";
            for ($i = 1; $i <= 15; $i++) {
                echo str_repeat('*', $i), '<br>';
            }
            break;
        case "5";
            $days = array(
                'Mon' => 'Пн',
                'Tue' => 'Вт',
                'Wed' => 'Ср',
                'Thu' => 'Чт',
                'Fri' => 'Пт',
                'Sat' => 'Сб',
                'Sun' => 'Вс'
            );
            $curDay = date('D');
            foreach ($days as $key => $day) {
                if ($key == $curDay)
                    echo '<b>' . $day . '</b>' . ' ';
                else
                    echo $day . ' ';
            }
            break;
        case "6";
            for ($i = 0; $i <= 30; $i++) {
                if (strpos(strval($i), '3') > -1 && ($i % 5 != 0)) {
                    echo $i . ' ';
                }
            }
            break;
        case "7";
            $arr = [
                '1'=> [
                    'price' => 10,
                    'count' => 2
                ],
                '2'=> [
                    'price' => 5,
                    'count' => 5
                ],
                '3'=> [
                    'price' => 8,
                    'count' => 5
                ],
                '4'=> [
                    'price' => 12,
                    'count' => 4
                ],
                '5'=> [
                    'price' => 8,
                    'count' => 4
                ],
            ];
            $values = array_values($arr);
            var_dump($values);
            echo '<hr>';
            $keys2 = array_keys($values);
            sort($values);
            var_dump($values);
            echo '<hr>';
            break;
    }
}