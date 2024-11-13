<?php
/* 2. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, 
$arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения 
операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch). */

function mathOperation(float $arg1, float $arg2, $operation): float {
    switch ($operation) {
        case "+":
            return $arg1 + $arg2;
        case "-":
            return $arg1 - $arg2;
        case "*":
            return $arg1 * $arg2;
        case "/":
            if ($arg2 == 0) {
                throw new InvalidArgumentException('Деление на 0 невозможно!');
            }
            return $arg1 / $arg2;
        default:
            throw new InvalidArgumentException('Неверный оператор');
    }
}

try {
    echo mathOperation(5, 2, "+") . PHP_EOL;  
    echo mathOperation(5, 2, "-") . PHP_EOL;  
    echo mathOperation(5, 2, "*") . PHP_EOL;  
    echo mathOperation(5, 2, "/") . PHP_EOL;  
    echo mathOperation(5, 0, "/") . PHP_EOL;  
} catch (InvalidArgumentException $e) {
    echo 'Ошибка: ' . $e->getMessage();
}
