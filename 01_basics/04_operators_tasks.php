<?php
/*
 * --------------------------------------------------------------------------
 * ПРАКТИКА: ОПЕРАТОРИ
 * --------------------------------------------------------------------------
 */

// ========================================================================
// ЗАВДАННЯ 1: Арифметика
// ========================================================================
// Створіть змінні $num1 = 17 і $num2 = 5.
// Створіть змінну $remainder, яка містить ОСТАЧУ від ділення $num1 на $num2.
// (Підказка: використовуйте оператор %)

// TODO: Ваш код тут
$num1 = 17;
$num2 = 5;
$remainder = $num1 % $num2;


// ========================================================================
// ЗАВДАННЯ 2: Інкремент
// ========================================================================
// Створіть змінну $counter зі значенням 10.
// Збільшіть її на 1, використовуючи оператор ++.

// TODO: Ваш код тут
$counter = 10;
$counter++;


// ========================================================================
// ЗАВДАННЯ 3: Сувора перевірка (===)
// ========================================================================
// Створіть змінну $strFive = "5" (рядок).
// Створіть змінну $intFive = 5 (число).
// Створіть змінну $isIdentical, яка порівнює їх через ===.
// (Результат має бути false).

// TODO: Ваш код тут
$strFive = "5";
$intFive = 5;
$isIdentical = $strFive === $intFive;


// ========================================================================
// ЗАВДАННЯ 4: Складна логіка
// ========================================================================
// У вас є бюджет $money = 100.
// Ціна товару $cost = 80.
// Знижка діє? $hasDiscount = false.
// Вам потрібно визначити, чи можете ви купити товар ($canBuy).
// Умова: Грошей ($money) має бути більше або дорівнювати ціні ($cost)
// АБО ($hasDiscount) має бути true. (Хоча у нашому випадку знижки немає, але, будь ласка, напишіть повну умову).

// Створіть змінні $money, $cost, $hasDiscount та логічну $canBuy.

// TODO: Ваш код тут
$money = 100;
$cost = 80;
$hasDiscount = false;
$canBuy = $money >= $cost || $hasDiscount;


// --- НИЖЧЕ КОД ТЕСТІВ ---
$tests = [
    1 => [
        'name' => 'Остача від ділення',
        'condition' => $num1 == 17 && $num2 == 5 && $remainder == 2,
        'success' => 'Правильно! 17 % 5 = 2.',
        'error' => 'Остача від ділення 17 на 5 має дорівнювати 2.'
    ],
    2 => [
        'name' => 'Лічильник',
        'condition' => $counter == 11,
        'success' => 'Лічильник збільшено.',
        'error' => 'Змінна $counter повинна початково бути 10, а потім стати 11.'
    ],
    3 => [
        'name' => 'Суворе порівняння',
        'condition' => $strFive === "5" && $intFive === 5 && $isIdentical === false,
        'success' => 'Вірно! "5" не тотожне 5.',
        'error' => 'Змінна $isIdentical має бути результатом порівняння === і дорівнювати false.'
    ],
    4 => [
        'name' => 'Логіка покупки',
        'condition' => isset($canBuy) && $canBuy === true && $money == 100 && $cost == 80,
        'success' => 'Логіка правильна.',
        'error' => 'Перевірте умову: ($money >= $cost) || $hasDiscount.'
    ]
];
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Практика: Оператори</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #fff5f5;
            padding: 40px;
        }

        .container {
            max-width: 750px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            border-top: 5px solid #ff6b6b;
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

        .task:last-child {
            border-bottom: none;
        }

        .status {
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 0.9em;
        }

        .success {
            background: #d4edda;
            color: #155724;
        }

        .fail {
            background: #f8d7da;
            color: #721c24;
        }

        .msg {
            color: #666;
            font-size: 0.9em;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Перевірка: Оператори</h1>

        <?php foreach ($tests as $id => $test): ?>
            <div class="task">
                <div>
                    <strong>Завдання <?php echo $id; ?>: <?php echo $test['name']; ?></strong>
                    <div class="msg">
                        <?php echo $test['condition'] ? $test['success'] : $test['error']; ?>
                    </div>
                </div>
                <div>
                    <?php if ($test['condition']): ?>
                        <span class="status success">ВИКОНАНО</span>
                    <?php else: ?>
                        <span class="status fail">ПОМИЛКА</span>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</body>

</html>