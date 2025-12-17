<?php
/*
 * --------------------------------------------------------------------------
 * ПРАКТИКА: УМОВНІ КОНСТРУКЦІЇ
 * --------------------------------------------------------------------------
 */

// ========================================================================
// ЗАВДАННЯ 1: If / Else
// ========================================================================
// У вас є змінна $age = 15;
// Напишіть конструкцію if...else:
// Якщо $age >= 18, змінна $access має бути "Allowed".
// Інакше $access має бути "Denied".

// TODO: Ваш код тут
$age = 15;
$access = "";

if ($age >= 18) {
    $access = "Allowed";
} else {
    $access = "Denied";
}


// ========================================================================
// ЗАВДАННЯ 2: Тернарний оператор
// ========================================================================
// Змінна $theme = "dark";
// Створіть змінну $bgColor.
// Якщо $theme дорівнює "dark", то $bgColor = "#000".
// Інакше $bgColor = "#fff".
// Використайте тернарний оператор ( condition ? val1 : val2 )

// TODO: Ваш код тут
$theme = "dark";
$bgColor = $theme === "dark" ? "#000" : "#fff";

// ========================================================================
// ЗАВДАННЯ 3: Match (або Switch)
// ========================================================================
// У вас є змінна $day = 3; (1 - Пн, 2 - Вт, 3 - Ср...)

// Визначте назву дня тижня у змінну $dayName.
// 1 -> "Monday"
// 2 -> "Tuesday"
// 3 -> "Wednesday"
// default -> "Unknown"

// TODO: Ваш код тут
$day = 3;
$dayName = match ($day) {
    1 => "Monday",
    2 => "Tuesday",
    3 => "Wednesday",
    default => "Unknown",
};



// --- ТЕСТИ ---
$tests = [
    1 => [
        'name' => 'Перевірка віку',
        'condition' => $age == 15 && $access === "Denied",
        'success' => 'Правильно. Для 15 років доступ заборонено.',
        'error' => 'Якщо $age = 15, $access має бути "Denied".'
    ],
    2 => [
        'name' => 'Колір фону',
        'condition' => $bgColor === "#000",
        'success' => 'Тернарний оператор працює.',
        'error' => 'Якщо тема "dark", колір має бути "#000".'
    ],
    3 => [
        'name' => 'День тижня',
        'condition' => $dayName === "Wednesday",
        'success' => 'День визначено вірно.',
        'error' => 'Для $day=3, $dayName має бути "Wednesday".'
    ]
];
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Практика: Умови</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #e3f2fd;
            padding: 40px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            border-left: 5px solid #2196f3;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-top: 0;
            color: #1565c0;
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
        <h1>Перевірка: Умови</h1>
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