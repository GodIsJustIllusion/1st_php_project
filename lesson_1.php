<?php

    echo "<h2>Задача 1</h2><br>";
    // сложение двух чисел

    $a = rand(0, 100);
    $b = rand(0, 100);

    echo "$a + $b = ". ($a +$b);

    echo "<h2>Задача 2</h2><br>";
    // сложение двух строк

    $price = 1500;
    $currency = ' руб';

    echo $price . $currency;

    $str = 'Это ';
    $str .= 'очень ';
    $str .= 'длинная ';
    $str .= 'строка.';

    echo $str;

    echo "<h2>Задача 3</h2><br>";
    // конструкция if else и switch

    $type_animal = 'cat';
    $dog = "Шарик";
    $cat = 'Барсик';
    $fish = "Немо";


    // переменная переменной
    // if (isset ($$type_animal)) {
    //     echo $$type_animal;
    // } else {
    //     echo "Error!";
    // }

    if ($type_animal == 'dog') {
        $name_animal = $dog;
        echo $name_animal;
    } else if ($type_animal == 'cat') {
        $name_animal = $cat;
        echo $name_animal;
    } else if ($type_animal == 'fish') {
        $name_animal = $fish;
        echo $name_animal;
    } else {
        echo "Ошибка! Неизвестное животное";
    }