<?php
/*
 * --------------------------------------------------------------------------
 * ПРАКТИКА: ФУНКЦІЇ
 * --------------------------------------------------------------------------
 */

// ========================================================================
// ЗАВДАННЯ 1: Створення функції
// ========================================================================
// Створіть функцію getCopyright(), яка НЕ приймає аргументів.
// Вона має ПОВЕРТАТИ (return) рядок: "© 2025 Всі права захищено".
// Потім викличте цю функцію і результат запишіть у змінну $footerText.

// TODO: Ваш код тут
function getCopyright()
{
    return "© 2025 Всі права захищено";
}

$footerText = getCopyright();


// ========================================================================
// ЗАВДАННЯ 2: Аргументи
// ========================================================================
// Створіть функцію calculateArea($width, $height).
// Вона має повертати площу прямокутника (width * height).
// Викличте її для значень 10 і 5, результат запишіть у $myArea.

// TODO: Ваш код тут
function calculateArea($width, $height)
{
    return $width * $height;
}

$myArea = calculateArea(10, 5);


// ========================================================================
// ЗАВДАННЯ 3: Типізація та Дефолтні значення
// ========================================================================
// Створіть функцію buildTag(string $tagName, string $text = "Default").
// Вона має повертати рядок типу "<tagName>text</tagName>".
// Наприклад: buildTag("div", "Hello") -> "<div>Hello</div>".
// Викличте її ТІЛЬКИ з одним аргументом "h1", результат запишіть у $myHeader.
// (Тобто текст має бути "Default").

// TODO: Ваш код тут
function buildTag(string $tagName, string $text = "Default")
{
    return "<" . $tagName . ">" . $text . "</" . $tagName . ">";
}

$myHeader = buildTag("h1");


// --- ТЕСТИ ---
$tests = [
    1 => [
        'name' => 'Функція copyright',
        'condition' => function_exists('getCopyright') && $footerText === "© 2025 Всі права захищено",
        'success' => 'Функція працює і повертає текст.',
        'error' => 'Функція має повертати "© 2025 Всі права захищено".'
    ],
    2 => [
        'name' => 'Площа',
        'condition' => function_exists('calculateArea') && $myArea === 50,
        'success' => 'Площа порахована вірно (50).',
        'error' => 'calculateArea(10, 5) має повернути 50.'
    ],
    3 => [
        'name' => 'Тег з параметрами',
        'condition' => function_exists('buildTag') && $myHeader === "<h1>Default</h1>",
        'success' => 'Тег згенеровано вірно.',
        'error' => 'buildTag("h1") має повернути "<h1>Default</h1>". Перевірте значення за замовчуванням.'
    ]
];
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Практика: Функції</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #fffbe6;
            padding: 40px;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-top: 5px solid #f1c40f;
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
            background: #d4edda;
            color: #155724;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .fail {
            background: #f8d7da;
            color: #721c24;
            padding: 5px 10px;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Перевірка: Функції</h1>
        <?php foreach ($tests as $id => $test): ?>
            <div class="task">
                <div>
                    <strong>#<?php echo $id; ?></strong> <?php echo $test['name']; ?> <br>
                    <small><?php echo $test['condition'] ? $test['success'] : $test['error']; ?></small>
                </div>
                <div>
                    <?php if ($test['condition']): ?> <span class="success">OK</span> <?php else: ?> <span
                            class="fail">NO</span> <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>