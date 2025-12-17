<?php
/*
 * УРОК 2: Змінні та Типи даних
 * 
 * 1. Змінна починається з $ (наприклад, $name).
 * 2. PHP - мова з динамічною типізацією (тип визначається значенням).
 */

// --- ТИПИ ДАНИХ ---

$name = "Олексій";      // String (Рядок)
$age = 25;              // Integer (Ціле число)
$height = 1.82;         // Float (Дробове число)
$isStudent = true;      // Boolean (Логічний тип: true/false)
$nothing = null;        // NULL (Порожньо)

// --- КОНКАТЕНАЦІЯ (Об'єднання рядків) ---
// Використовується крапка (.)

$greeting = "Привіт, мене звати " . $name . " і мені " . $age . " років.";

// --- ІНТЕРПОЛЯЦІЯ (Змінні всередині лапок) ---
// Працює ТІЛЬКИ в подвійних лапках ""

$infoDouble = "Мій зріст $height м."; // Працює
$infoSingle = 'Мій зріст $height м.'; // НЕ працює (виведе як текст)

?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Урок 2 - Змінні</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }

        .box {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        code {
            background: #eee;
            padding: 2px 5px;
            border-radius: 3px;
        }
    </style>
</head>

<body>

    <h1>Змінні в PHP</h1>

    <div class="box">
        <h3>Результат конкатенації (.):</h3>
        <p><?php echo $greeting; ?></p>
    </div>

    <div class="box">
        <h3>Подвійні vs Одинарні лапки:</h3>
        <p>Подвійні (""): <?php echo $infoDouble; ?></p>
        <p>Одинарні (''): <?php echo $infoSingle; ?></p>
    </div>

    <div class="box">
        <h3>Діагностика типів (var_dump):</h3>
        <p>Функція <code>var_dump()</code> показує тип і значення змінної. Дуже корисно для налагодження!</p>
        <pre><?php
        var_dump($name);
        var_dump($age);
        var_dump($isStudent); // true виводиться як bool(true), false як bool(false)
        ?></pre>
    </div>

</body>

</html>