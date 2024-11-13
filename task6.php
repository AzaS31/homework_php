<?php
// 6. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
// 22 часа 15 минут
// 21 час 43 минуты.

function getTimeWithDeclensions(int $hour, int $minute) : string {

    if ($hour % 10 == 1 && $hour != 11) {
        $hourDeclension = "час";
    } elseif ($hour % 10 >= 2 && $hour % 10 <= 4 && !($hour >= 12 && $hour <= 14)) {
        $hourDeclension = "часа";
    } else {
        $hourDeclension = "часов";
    }

    if ($minute % 10 == 1 && $minute != 11) {
        $minuteDeclension = "минута";
    } elseif ($minute % 10 >= 2 && $minute % 10 <= 4 && !($minute >= 12 && $minute <= 14)) {
        $minuteDeclension = "минуты";
    } else {
        $minuteDeclension = "минут";
    }

    return "$hour $hourDeclension $minute $minuteDeclension";
}


$hour = date("G");  
$minute = date("i"); 
echo getTimeWithDeclensions($hour, $minute);