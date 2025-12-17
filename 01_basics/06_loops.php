<?php
/*
 * УРОК 6: Цикли (Loops)
 * 
 * Цикли дозволяють виконувати один і той самий код багато разів.
 */

// --- 1. ЦИКЛ FOR ---
// Використовується, коли ми знаємо точну кількість повторень.
// Конструкція: for (старт; умова; зміна)

$forOutput = "";
for ($i = 1; $i <= 5; $i++) {
    $forOutput .= "Число: $i <br>";
}

// --- 2. ЦИКЛ WHILE ---
// Виконується, ПОКИ умова правдива.
// ОБЕРЕЖНО: Якщо не змінювати умову всередині, цикл буде вічним!

$count = 10;
$whileOutput = "";
while ($count > 0) {
    $whileOutput .= $count . " ";
    $count -= 2; // Зменшуємо на 2
}

// --- 3. ЦИКЛ FOREACH (НАЙВАЖЛИВІШИЙ) ---
// Створений спеціально для масивів. Проходить по кожному елементу.

$users = ["Олеся", "Іван", "Марія"];
$userList = "";

foreach ($users as $user) {
    // На кожній ітерації змінна $user приймає значення наступного елемента
    $userList .= "<li>Вибраний користувач: <strong>$user</strong></li>";
}

// Також можна отримувати ключі:
$prices = ["Apple" => 20, "Samsung" => 15];
$priceList = "";

foreach ($prices as $brand => $price) {
    $priceList .= "<li>$brand коштує $$price</li>";
}

// --- 4. BREAK та CONTINUE ---
// break - повністю зупиняє цикл.
// continue - пропускає поточну ітерацію і йде до наступної.

$numbers = [1, 2, 3, 4, 5, 6, 7];
$magicOutput = "";

foreach ($numbers as $n) {
    if ($n == 3) {
        continue; // Пропустити трійку
    }
    if ($n == 6) {
        break; // Зупинитися, якщо дійшли до 6
    }
    $magicOutput .= "[$n] ";
}
// Результат буде: [1] [2] [4] [5] (3 пропущено, на 6 зупинилися)

?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Урок 6 - Цикли</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }

        .box {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            background: #fdfdfd;
        }

        h3 {
            margin-top: 0;
            color: #444;
        }
    </style>
</head>

<body>

    <h1>Цикли в PHP</h1>

    <div class="box">
        <h3>1. For (1 до 5):</h3>
        <p><?php echo $forOutput; ?></p>
    </div>

    <div class="box">
        <h3>2. While (Зворотній відлік через 2):</h3>
        <p><?php echo $whileOutput; ?></p>
    </div>

    <div class="box">
        <h3>3. Foreach (Список користувачів):</h3>
        <ul><?php echo $userList; ?></ul>
    </div>

    <div class="box">
        <h3>3.1. Foreach (Асоціативний масив):</h3>
        <ul><?php echo $priceList; ?></ul>
    </div>

    <div class="box">
        <h3>4. Break/Continue:</h3>
        <p><?php echo $magicOutput; ?></p>
    </div>

</body>

</html>