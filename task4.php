<?php
/* 4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания 
(‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’). Написать функцию транслитерации строк. */

$translit_map = [
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
    'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p',
    'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh',
    'щ' => 'shch', 'ъ' => 'ie', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
];

function transliterate(string $string) : string {
    global $translit_map;

    $result = '';
    for ($i = 0; $i < mb_strlen($string, 'UTF-8'); $i++) {
        $char = mb_substr($string, $i, 1, 'UTF-8');
        $result .= isset($translit_map[$char]) ? $translit_map[$char] : $char;
    }
    return $result;
}

$input_string = "задание выполнено";
$transliterated_string = transliterate($input_string);
echo $transliterated_string;

