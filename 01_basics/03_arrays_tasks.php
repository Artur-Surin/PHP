<?php
/*
 * --------------------------------------------------------------------------
 * ПРАКТИКА: МАСИВИ
 * --------------------------------------------------------------------------
 * 
 * В цьому файлі є 4 завдання.
 * Пишіть свій код у відведених місцях (TODO).
 * Оновіть сторінку в браузері, щоб побачити результат перевірки.
 * 
 */

// ========================================================================
// ЗАВДАННЯ 1: Індексовані масиви
// ========================================================================
// Створіть масив $cities, який містить назви 3-х міст: "Київ", "Львів", "Одеса".

// TODO: Ваш код тут
$cities = ["Київ", "Львів", "Одеса"];


// ========================================================================
// ЗАВДАННЯ 2: Асоціативні масиви
// ========================================================================
// Створіть масив $product з ключами:
// "name" (назва товару, наприклад "Ноутбук")
// "price" (ціна, наприклад 25000)
// "in_stock" (чи є в наявності, true або false)

// TODO: Ваш код тут
$product = ["name" => "Ноутбук", "price" => 25000, "in_stock" => true];


// ========================================================================
// ЗАВДАННЯ 3: Модифікація масиву
// ========================================================================
// Додайте в масив $cities ще одне місто - "Харків".
// Змініть ціну в масиві $product на будь-яку іншу.

// TODO: Ваш код тут
$cities[] = "Харків";
$product["price"] = 15789;


// ========================================================================
// ЗАВДАННЯ 4: Вивід даних
// ========================================================================
// Створіть змінну $citiesCount, в яку запишіть кількість елементів масиву $cities.
// Створіть змінну $productName, в яку запишіть назву товару з масиву $product.

// TODO: Ваш код тут
$citiesCount = count($cities);
$productName = $product["name"];



// --- НИЖЧЕ КОД ТЕСТІВ, НЕ ЗМІНЮЙТЕ ЙОГО ---
$tests = [
    1 => [
        'name' => 'Масив міст',
        'condition' => is_array($cities) && count($cities) >= 3 && in_array("Київ", $cities) && in_array("Львів", $cities),
        'success' => 'Чудово! Масив міст створено.',
        'error' => 'Масив $cities має бути створений і містити "Київ", "Львів", "Одеса".'
    ],
    2 => [
        'name' => 'Товар',
        'condition' => is_array($product) && isset($product['name']) && isset($product['price']) && isset($product['in_stock']),
        'success' => 'Масив товару правильний!',
        'error' => 'Масив $product повинен мати ключі "name", "price", "in_stock".'
    ],
    3 => [
        'name' => 'Оновлення даних',
        'condition' => in_array("Харків", $cities) && (isset($product['price']) && $product['price'] != 25000), // assuming initial wasn't just 0 or checked specifically against user input, simplified logic
        'success' => 'Дані успішно оновлені.',
        'error' => 'Перевірте, чи додали ви "Харків" та чи змінили ціну (вона не повинна бути порожньою).'
    ],
    4 => [
        'name' => 'Змінні та підрахунок',
        'condition' => $citiesCount >= 4 && !empty($productName),
        'success' => 'Змінні створені вірно.',
        'error' => '$citiesCount має бути числом (к-сть міст), а $productName - назвою товару.'
    ]
];
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Практика: Масиви</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f2f5;
            padding: 40px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
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
        <h1>Результати тестів</h1>

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