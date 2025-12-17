<?php
/*
 * --------------------------------------------------------------------------
 * ПРАКТИКА: ЗМІННІ ТА ТИПИ ДАНИХ
 * --------------------------------------------------------------------------
 * 
 * В цьому файлі є 4 завдання.
 * Мета: навчитися створювати змінні різних типів та об'єднувати їх у рядки.
 * 
 */

// ========================================================================
// ЗАВДАННЯ 1: Типи даних
// ========================================================================
// Створіть три змінні:
// $age (ціле число, ваш вік або будь-яке число)
// $price (дробове число, наприклад 99.99)
// $isActive (булеве значення, true або false)

// TODO: Ваш код тут
$age = 40;
$price = 77.77;
$isActive = true;


// ========================================================================
// ЗАВДАННЯ 2: Конкатенація (Об'єднання рядків через крапку)
// ========================================================================
// Створіть змінні $firstName = "Taras" та $lastName = "Shevchenko".
// Створіть змінну $fullName, яка об'єднає їх через пробіл.
// Результат має бути: "Taras Shevchenko"

// TODO: Ваш код тут
$firstName = "Taras";
$lastName = "Shevchenko";
$fullName = $firstName . " " . $lastName;


// ========================================================================
// ЗАВДАННЯ 3: Інтерполяція (Змінні в подвійних лапках)
// ========================================================================
// Створіть змінну $welcomeMessage.
// Використовуючи подвійні лапки "", запишіть в неї речення:
// "Користувач Taras зараз активний"
// Замість "Taras" використайте змінну $firstName.

// TODO: Ваш код тут
$welcomeMessage = "Користувач $firstName зараз активний";


// ========================================================================
// ЗАВДАННЯ 4: Одинарні лапки
// ========================================================================
// Створіть змінну $rawString, використовуючи ОДИНАРНІ лапки ''.
// Запишіть в неї текст: 'Ціна товару: $price'.
// У цьому завданні PHP НЕ замінить $price на число, і це правильна поведінка для одинарних лапок.

// TODO: Ваш код тут
$rawString = 'Ціна товару: $price';



// --- НИЖЧЕ КОД ТЕСТІВ, НЕ ЗМІНЮЙТЕ ЙОГО ---
$tests = [
    1 => [
        'name' => 'Типи даних',
        'condition' => is_int($age) && $age > 0 && is_float($price) && is_bool($isActive) && $isActive !== null,
        'success' => 'Чудово! Всі типи задані вірно.',
        'error' => 'Перевірте типи: $age має бути цілим числом, $price - дробовим (з крапкою), $isActive - true або false.'
    ],
    2 => [
        'name' => 'Конкатенація імен',
        'condition' => $firstName === "Taras" && $lastName === "Shevchenko" && $fullName === "Taras Shevchenko",
        'success' => 'Рядки об\'єднано правильно!',
        'error' => 'Змінна $fullName має містити "Taras Shevchenko" (з пробілом). Впевніться, що $firstName та $lastName задані вірно.'
    ],
    3 => [
        'name' => 'Інтерполяція',
        'condition' => strpos($welcomeMessage, 'Taras') !== false && strpos($welcomeMessage, 'активний') !== false && strpos($welcomeMessage, '$firstName') === false,
        'success' => 'Змінна успішно підставилась у рядок.',
        'error' => 'Використовуйте подвійні лапки для $welcomeMessage і вставте туди змінну $firstName.'
    ],
    4 => [
        'name' => 'Одинарні лапки',
        'condition' => strpos($rawString, '$price') !== false,
        'success' => 'Правильно! Одинарні лапки не обробляють змінні.',
        'error' => 'Змінна $rawString має містити саме текст "$price", а не число. Використовуйте одинарні лапки \'\'.'
    ]
];
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Практика: Змінні</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #eef2f5;
            padding: 40px;
        }

        .container {
            max-width: 750px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        h1 {
            margin-top: 0;
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
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
        <h1>Перевірка: Змінні</h1>

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