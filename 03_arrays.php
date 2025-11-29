<?php
/*
 * УРОК 3: Масиви (Arrays)
 * 
 * Масив - це змінна, яка може зберігати більше одного значення одночасно.
 */

// --- 1. ІНДЕКСОВАНІ МАСИВИ ---
// Ключі створюються автоматично, починаючи з 0.

$fruits = ["Яблуко", "Банан", "Апельсин"];
// Або старий синтаксис: $fruits = array("Яблуко", "Банан");

// Додавання елемента
$fruits[] = "Груша";

// --- 2. АСОЦІАТИВНІ МАСИВИ ---
// Ми самі задаємо ключі (імена).

$person = [
    "name" => "Олексій",
    "age" => 25,
    "city" => "Київ",
    "skills" => ["PHP", "HTML", "CSS"] // Масив всередині масиву!
];

// Доступ до елементів
$myFruit = $fruits[1]; // Банан (бо рахуємо з 0)
$myName = $person["name"]; // Олексій

?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Урок 3 - Масиви</title>
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
            background: #f9f9f9;
        }

        h3 {
            margin-top: 0;
        }

        pre {
            background: #333;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <h1>Масиви в PHP</h1>

    <div class="box">
        <h3>Простий список (Індексований):</h3>
        <p>Мій улюблений фрукт: <strong><?php echo $fruits[0]; ?></strong></p>
        <p>Всього фруктів: <strong><?php echo count($fruits); ?></strong></p>
    </div>

    <div class="box">
        <h3>Картка користувача (Асоціативний):</h3>
        <p>Ім'я: <?php echo $person['name']; ?></p>
        <p>Місто: <?php echo $person['city']; ?></p>
        <!-- Виводимо елемент з вкладеного масиву -->
        <p>Основна навичка: <?php echo $person['skills'][0]; ?></p>
    </div>

    <div class="box">
        <h3>Як виглядає масив для комп'ютера (print_r):</h3>
        <p>Функція <code>print_r()</code> ідеальна для перегляду масивів.</p>
        <pre><?php print_r($person); ?></pre>
    </div>

</body>

</html>