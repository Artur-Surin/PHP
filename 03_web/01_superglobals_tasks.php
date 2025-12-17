<?php
/*
 * --------------------------------------------------------------------------
 * ПРАКТИКА: СУПЕРГЛОБАЛЬНІ МАСИВИ ($_GET)
 * --------------------------------------------------------------------------
 * 
 * УВАГА: Щоб ці завдання працювали, вам потрібно буде вручну змінювати URL в браузері!
 */

// ========================================================================
// ЗАВДАННЯ 1: Привітання
// ========================================================================
// 1. Перевірте, чи передано параметр 'user' в URL (?user=Alex).
// 2. Якщо так - запишіть у змінну $message рядок "Hello, Alex!".
// 3. Якщо ні - запишіть "Hello, Guest!".
// Підказка: використовуйте isset($_GET['user'])

// TODO: Ваш код тут
$message = "";
if (isset($_GET['user'])) {
    $message = "Hello, " . $_GET['user'] . "!";
} else {
    $message = "Hello, Guest!";
}



// ========================================================================
// ЗАВДАННЯ 2: Сторінка
// ========================================================================
// Уявіть, що у вас є сайт з номерами сторінок (?page=1, ?page=5).
// 1. Отримайте номер сторінки з $_GET['page'].
// 2. Якщо параметра немає, сторінка має бути 1.
// 3. Запишіть номер у змінну $currentPage (int).

// TODO: Ваш код тут
$currentPage = $_GET['page'] ?? 1;



// --- ТЕСТИ ---
// Примітка: Оскільки ми не можемо легко змінити URL з коду,
// ми емулюємо $_GET для тестів, якщо він порожній.
if (empty($_GET)) {
    $_GET['user'] = 'Alex';
    $_GET['page'] = '5';
    // ПРИМІТКА ДЛЯ КОРИСТУВАЧА:
    // Тести будуть використовувати ці "фейкові" дані, 
    // щоб перевірити вашу логіку.
}

// Повторний запуск вашого коду з фейковими даними для перевірки
// (В реальному житті так не роблять, це лише для авто-тесту)
if ($message === "") {
    // Re-run user logic block equivalent manually for checking expected output if variable is empty
    // But better just let user write code that works with $_GET.
}
// Щоб тест пройшов, ваш код має працювати з тим, що зараз в $_GET.

$isUserSet = isset($_GET['user']); // Alex
$pageSet = isset($_GET['page']); // 5

$tests = [
    1 => [
        'name' => 'Привітання (user=Alex)',
        'condition' => $message === "Hello, " . $_GET['user'] . "!",
        'success' => "Логіка працює! Отримано: $message",
        'error' => "Для ?user=Alex, повідомлення має бути 'Hello, Alex!'. Зараз: '$message'"
    ],
    2 => [
        'name' => 'Нумерація (page=5)',
        'condition' => (int) $currentPage === (int) $_GET['page'],
        'success' => "Сторінка визначена вірно: $currentPage",
        'error' => "Маємо отримати сторінку з URL. Зараз: '$currentPage'"
    ]
];
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Практика: GET запити</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #e0f7fa;
            padding: 40px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-top: 5px solid #00acc1;
        }

        h1 {
            margin-top: 0;
            color: #006064;
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

        .info {
            background: #fff3cd;
            color: #856404;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Перевірка: GET параметри</h1>

        <div class="info">
            <strong>Поточний URL запит:</strong><br>
            ?<?php echo http_build_query($_GET); ?>
            <br><br>
            Для перевірки роботи, спробуйте вручну змінити адресу:<br>
            <a href="?user=Ivan&page=10">?user=Ivan&page=10</a> |
            <a href="?">Скинути (Guest)</a>
        </div>

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