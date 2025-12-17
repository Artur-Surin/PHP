<?php
/*
 * --------------------------------------------------------------------------
 * ПРАКТИКА: ЦИКЛИ
 * --------------------------------------------------------------------------
 */

// ========================================================================
// ЗАВДАННЯ 1: Цикл FOR
// ========================================================================
// Вам потрібно порахувати суму чисел від 1 до 5 (1+2+3+4+5).
// Створіть змінну $sum = 0.
// Використайте цикл for, де змінна $i змінюється від 1 до 5.
// Всередині циклу додавайте $i до $sum ($sum += $i).

// TODO: Ваш код тут
$sum = 0;
for ($i = 1; $i <= 5; $i++) {
    $sum += $i;
}


// ========================================================================
// ЗАВДАННЯ 2: Цикл FOREACH для списку
// ========================================================================
// У вас є масив кольорів $colors.
// Вам потрібно створити HTML рядок зі списком кольорів: "Red, Green, Blue, ".
// Створіть змінну $colorsString = "".
// Пройдіться циклом foreach по масиву $colors.
// Додавайте назву кольору та кому з пробілом до рядка.

$colors = ["Red", "Green", "Blue"];

// TODO: Ваш код тут
$colorsString = "";
foreach ($colors as $color) {
    $colorsString .= $color . ", ";
}

// ========================================================================
// ЗАВДАННЯ 3: Фільтрація з CONTINUE
// ========================================================================
// У вас є масив чисел $nums.
// Вам потрібно знайти суму ТІЛЬКИ парних чисел (2, 4, 6...).
// Пройдіться foreach.
// Якщо число непарне ($n % 2 != 0) -> continue.
// Інакше додавайте до $evenSum.

$nums = [1, 2, 3, 4, 5, 6, 10];
$evenSum = 0;

// TODO: Ваш код тут
foreach ($nums as $num) {
    if ($num % 2 != 0) {
        continue;
    }
    $evenSum += $num;
}


// --- ТЕСТИ ---
$tests = [
    1 => [
        'name' => 'Сума чисел (For)',
        'condition' => $sum === 15,
        'success' => 'Правильно! 1+2+3+4+5 = 15.',
        'error' => 'Сума має бути 15.'
    ],
    2 => [
        'name' => 'Рядок кольорів (Foreach)',
        'condition' => strpos($colorsString, 'Red') !== false && strpos($colorsString, 'Blue') !== false,
        'success' => 'Список сформовано.',
        'error' => 'Рядок має містити назви кольорів.'
    ],
    3 => [
        'name' => 'Сума парних (Continue)',
        'condition' => $evenSum === 12, // 2+4+6+10 = 22... Wait. 2+4+6+10 = 22. In task I said ... 2, 4, 6... Let's recheck array. [1, 2, 3, 4, 5, 6, 10]. Even: 2, 4, 6, 10. Sum = 22.
        'success' => 'Правильно! Сума парних (2+4+6+10) = 22.',
        // Let's adjust the condition to match expected 22.
        'condition' => $evenSum === 22,
        'error' => 'Сума парних чисел (2, 4, 6, 10) має бути 22.'
    ]
];
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Практика: Цикли</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #fafafa;
            padding: 40px;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border-top: 5px solid #673ab7;
        }

        h1 {
            margin-top: 0;
            color: #333;
        }

        .task {
            border-bottom: 1px solid #eee;
            padding: 20px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .success {
            color: green;
            font-weight: bold;
        }

        .fail {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Перевірка: Цикли</h1>
        <?php foreach ($tests as $id => $test): ?>
            <div class="task">
                <div>
                    <strong>#<?php echo $id; ?></strong> <?php echo $test['name']; ?> <br>
                    <small><?php echo $test['condition'] ? $test['success'] : $test['error']; ?></small>
                </div>
                <div>
                    <?php if ($test['condition']): ?> <span class="success">OK</span> <?php else: ?> <span
                            class="fail">XXX</span> <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>