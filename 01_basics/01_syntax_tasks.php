<?php
/*
 * --------------------------------------------------------------------------
 * ПРАКТИКА: СИНТАКСИС
 * --------------------------------------------------------------------------
 * 
 * УРОК 1: Основи синтаксису.
 * 
 * ВАЖЛИВО: Якщо ви бачите помилку "Parse error: syntax error", 
 * це означає, що ви десь пропустили крапку з комою (;), 
 * не закрили лапки ("") або зробили іншу друкарську помилку.
 * Виправте це, щоб побачити результати тестів.
 * 
 */

// ========================================================================
// ЗАВДАННЯ 1: Створення змінної (String)
// ========================================================================
// Створіть змінну $greeting і присвойте їй текст "Hello PHP".
// Не забудьте поставити крапку з комою в кінці!

// TODO: Ваш код тут
$greeting = "Hello PHP";


// ========================================================================
// ЗАВДАННЯ 2: Числа (Integer)
// ========================================================================
// Створіть змінну $year і присвойте їй поточний рік (наприклад, 2025).
// Зверніть увагу: числа пишуться БЕЗ лапок.

// TODO: Ваш код тут
$year = 2025;


// ========================================================================
// ЗАВДАННЯ 3: HTML всередині PHP
// ========================================================================
// Створіть змінну $link.
// Присвойте їй рядок: "<a href='#'>Google</a>"
// Використовуйте подвійні лапки для рядка, а всередині (для href) - одинарні, 
// щоб не виникло конфлікту лапок.

// TODO: Ваш код тут
$link = "<a href='#'>Google</a>";



// --- НИЖЧЕ КОД ТЕСТІВ, НЕ ЗМІНЮЙТЕ ЙОГО ---
$tests = [
    1 => [
        'name' => 'Текст привітання',
        'condition' => isset($greeting) && $greeting === "Hello PHP",
        'success' => 'Чудово! Синтаксис рядка вірний.',
        'error' => 'Змінна $greeting має містити точний текст "Hello PHP". Перевірте лапки та крапку з комою.'
    ],
    2 => [
        'name' => 'Числова змінна',
        'condition' => isset($year) && is_int($year) && $year > 2000,
        'success' => 'Правильно! Число записано вірно.',
        'error' => 'Змінна $year має бути числом (не в лапках) і більшим за 2000.'
    ],
    3 => [
        'name' => 'HTML у рядку',
        'condition' => isset($link) && strpos($link, '<a') !== false && strpos($link, 'Google') !== false,
        'success' => 'HTML тег записано коректно.',
        'error' => 'Змінна $link повинна містити HTML тег посилання <a>.'
    ]
];
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Практика: Синтаксис</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f4f6f9;
            padding: 40px;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-top: 0;
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: #e2e3e5;
            color: #383d41;
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
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 0.85em;
            text-transform: uppercase;
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
            color: #555;
            font-size: 0.9em;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Перевірка синтаксису</h1>

        <div class="alert">
            <strong>Порада:</strong> Якщо ви бачите просто білий екран замість цієї сторінки — шукайте пропущену
            <code>;</code> у вашому коді!
        </div>

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
                        <span class="status success">Passed</span>
                    <?php else: ?>
                        <span class="status fail">Failed</span>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</body>

</html>