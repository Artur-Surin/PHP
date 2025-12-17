<?php
/*
 * --------------------------------------------------------------------------
 * ПРАКТИКА: РОБОТА З РЯДКАМИ
 * --------------------------------------------------------------------------
 */

// ========================================================================
// ЗАВДАННЯ 1: Очищення даних (trim & lowercase)
// ========================================================================
// У нас є "брудний" email від користувача: "  User@Example.COM  ".
// 1. Приберіть зайві пробіли з початку і кінця (trim).
// 2. Переведіть все в нижній регістр (strtolower).
// Запишіть результат у змінну $cleanEmail.

$rawEmail = "  User@Example.COM  ";

// TODO: Ваш код тут
$cleanEmail = strtolower(trim($rawEmail));

// ========================================================================
// ЗАВДАННЯ 2: Заміна (str_replace)
// ========================================================================
// У тексті є помилка: слово "badword".
// Замініть його на "***" у змінній $comment.

$comment = "This is a badword situation.";

// TODO: Ваш код тут
$fixedComment = str_replace("badword", "***", $comment);


// ========================================================================
// ЗАВДАННЯ 3: Перетворення в масив (explode)
// ========================================================================
// У вас є рядок з іменами: "Ivan,Maria,Petro".
// Розбийте його на масив $namesArray, використовуючи кому як розділювач.

$namesList = "Ivan,Maria,Petro";

// TODO: Ваш код тут
$namesArray = explode(",", $namesList);



// --- ТЕСТИ ---
$tests = [
    1 => [
        'name' => 'Очищення Email',
        'condition' => $cleanEmail === "user@example.com",
        'success' => 'Email очищено вірно.',
        'error' => 'Очікується "user@example.com".'
    ],
    2 => [
        'name' => 'Цензура',
        'condition' => strpos($fixedComment, '***') !== false && strpos($fixedComment, 'badword') === false,
        'success' => 'Слово успішно замінено.',
        'error' => 'Замініть "badword" на "***".'
    ],
    3 => [
        'name' => 'Масив імен',
        'condition' => is_array($namesArray) && count($namesArray) === 3 && $namesArray[1] === "Maria",
        'success' => 'Рядок успішно розбито на масив.',
        'error' => 'Масив має містити 3 елементи. Другий має бути "Maria".'
    ]
];
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Практика: Рядки</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #ffebee;
            padding: 40px;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-top: 5px solid #e91e63;
        }

        h1 {
            margin-top: 0;
            color: #880e4f;
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
        <h1>Перевірка: Рядки</h1>
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