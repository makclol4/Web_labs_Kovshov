<?php
$str = 'ahb acb aeb aeeb adcb axeb';
preg_match_all('/a..b/', $str, $matches);
print_r($matches[0]); // Array ( [0] => ahb [1] => acb [2] => aeb )
//Регулярное выражение '/a..b/' ищет все строки, начинающиеся с символа 'a',
//за которым следуют любые два символа, а затем буква 'b'. 
//Функция preg_match_all() используется для поиска всех соответствий в 
//строке $str и сохранения их в массиве $matches.

$s = 'a1b2c3';
$s = preg_replace_callback('/\d+/', function($match) {
    return pow($match[0], 3);
}, $s);
echo $s; // 'a1b8c27'
//мы используем регулярное выражение `/\d+/`, которое ищет одно или 
//более подряд идущих цифр в строке. Затем мы передаем это выражение 
//в функцию `preg_replace_callback()`, которая заменяет найденный текст 
//вызовом анонимной функции. Анонимная функция получает в качестве аргумента
//совпадение, найденное регулярным выражением, и возводит его в куб, 
//используя функцию `pow()`. Результат замены возвращается из анонимной 
//функции и подставляется вместо найденного текста в строке.