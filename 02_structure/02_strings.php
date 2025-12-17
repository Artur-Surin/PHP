<?php
/*
 * РІВЕНЬ 2, УРОК 2: Робота з рядками (String Functions)
 * 
 * PHP має дуже багато вбудованих функцій для обробки тексту.
 * Ось найважливіші з них.
 */

// --- 1. ДОВЖИНА РЯДКА ---
$str = "Hello World";
echo "Довжина рядка '$str': " . strlen($str) . "<br>"; // 11


// --- 2. ПОШУК У РЯДКУ (strpos) ---
// Повертає позицію першого входження або false, якщо не знайдено.
$email = "user@example.com";
$atPos = strpos($email, "@");

if ($atPos !== false) {
    echo "Символ @ знайдено на позиції: $atPos<br>";
} else {
    echo "Символ @ не знайдено<br>";
}


// --- 3. ЗАМІНА (str_replace) ---
$text = "Я люблю Java";
$newText = str_replace("Java", "PHP", $text);
echo "Було: $text | Стало: $newText<br>";


// --- 4. ЗМІНА РЕГІСТРУ ---
echo strtoupper("hello") . "<br>"; // "HELLO"
echo strtolower("WORLD") . "<br>"; // "world"
echo ucfirst("ivan") . "<br>";     // "Ivan"


// --- 5. ВИДАЛЕННЯ ПРОБІЛІВ (trim) ---
// Часто використовується при обробці форм.
$input = "   login   ";
echo "Оригінал: '" . $input . "'<br>";
echo "Trimmed: '" . trim($input) . "'<br>";


// --- 6. МАСИВ З РЯДКА (explode) ---
// Розбиває рядок на шматочки по розділювачу.
$tagsString = "php,html,css,js";
$tagsArray = explode(",", $tagsString);

echo "<pre>";
print_r($tagsArray);
echo "</pre>";
// Результат: Array ( [0] => php [1] => html [2] => css [3] => js )


// --- 7. РЯДОК З МАСИВУ (implode) ---
// Збирає шматочки назад у рядок.
$backToString = implode(" | ", $tagsArray);
echo "З'єднали назад: $backToString<br>";

?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Рівень 2 - Рядки</title>
    <style>
        body {
            font-family: 'Segoe UI';
            background: #f4f4f9;
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <h1>Тема: Вбудовані функції рядків</h1>
    <p>Вище показано приклади роботи з <code>strlen</code>, <code>strpos</code>, <code>str_replace</code> та іншими.</p>
</body>

</html>