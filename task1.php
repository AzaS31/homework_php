<?php
// 1. Реализовать основные 4 арифметические операции в виде функции с тремя параметрами – два параметра это числа, третий – операция. Обязательно использовать оператор return.


function mathOperation(float $arg1, float $arg2, string $operation): float {
    if ($operation == "+") {
        return $arg1 + $arg2;
    }
    elseif ($operation == "-") {
        return $arg1 - $arg2;
    }
    elseif ($operation == "*") {
        return $arg1 * $arg2;
    }
    elseif ($operation == "/") {
        if ($arg2 == 0) {
            throw new InvalidArgumentException('Деление на 0 невозможно!');
        }
        return $arg1 / $arg2;
    } else {
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
