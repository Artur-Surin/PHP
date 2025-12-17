<?php
/*
 * УРОК 4: Оператори
 * 
 * Оператори дозволяють виконувати дії над змінними та значеннями.
 */

// --- 1. АРИФМЕТИЧНІ ОПЕРАТОРИ ---
$a = 10;
$b = 3;

$sum = $a + $b;       // Додавання (13)
$diff = $a - $b;      // Віднімання (7)
$mult = $a * $b;      // Множення (30)
$div = $a / $b;       // Ділення (3.333...)
$mod = $a % $b;       // Остача від ділення (1) - бо 10 = 3*3 + 1
$pow = $a ** $b;      // Піднесення до степеня (1000)

// --- 2. ОПЕРАТОРИ ПРИСВОЄННЯ ---
$x = 5;
$x += 10; // Це те саме, що $x = $x + 10; (Стане 15)
$x++;     // Інкремент: збільшити на 1 (Стане 16)
$x--;     // Декремент: зменшити на 1 (Стане 15)

// --- 3. ОПЕРАТОРИ ПОРІВНЯННЯ ---
$val1 = 5;
$val2 = "5";

$isEqual = ($val1 == $val2);   // true (значення рівні, незважаючи на тип)
$isIdentical = ($val1 === $val2); // false (типи різні: int vs string)
$notEqual = ($val1 != 5);      // false

// > (більше), < (менше), >= (більше або рівно), <= (менше або рівно)

// --- 4. ЛОГІЧНІ ОПЕРАТОРИ ---
// && (AND - І), || (OR - АБО), ! (NOT - НЕ)

$age = 20;
$hasPassport = true;

// Потрібно: вік >= 18 І наявність паспорта
$canTravel = ($age >= 18 && $hasPassport); // true

?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Урок 4 - Оператори</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
            line-height: 1.6;
        }

        .box {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            background: #f9f9f9;
        }

        code {
            background: #eee;
            padding: 2px 5px;
            border-radius: 3px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <h1>Оператори в PHP</h1>

    <div class="box">
        <h3>Арифметика (10 і 3):</h3>
        <p>10 / 3 = <strong><?php echo $div; ?></strong></p>
        <p>10 % 3 (Остача) = <strong><?php echo $mod; ?></strong> (Дуже корисно для перевірки на парність!)</p>
    </div>

    <div class="box">
        <h3>Порівняння (5 vs "5"):</h3>
        <p>== (Рівність значень): <strong><?php var_dump($val1 == $val2); ?></strong></p>
        <p>=== (Тотожність типів): <strong><?php var_dump($val1 === $val2); ?></strong> (Рекомендується!)</p>
    </div>

    <div class="box">
        <h3>Логіка:</h3>
        <p>Може подорожувати? <strong><?php var_dump($canTravel); ?></strong></p>
    </div>

</body>

</html>