<?php
/*
 * РІВЕНЬ 5, УРОК 2: Робота з БД через PHP (PDO)
 * 
 * Ми навчилися писати SQL запити. Тепер час навчитися виконувати їх з PHP коду.
 * Для цього існує стандарт PDO (PHP Data Objects). Це безпечний та зручний спосіб.
 */

// 1. ПІДКЛЮЧЕННЯ ДО БАЗИ ДАНИХ
$host = '127.0.0.1';
$db = 'php_course';
$user = 'root';
$pass = ''; // В Laragon пароль зазвичай порожній або 'root'
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Показувати помилки
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Повертати асоціативні масиви
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    // Створюємо з'єднання
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "<div style='color:green'>✅ Успішне підключення до бази даних!</div>";
} catch (\PDOException $e) {
    // Якщо помилка - виводимо її і зупиняємо скрипт
    die("<div style='color:red'>❌ Помилка підключення: " . $e->getMessage() . "</div>");
}


// 2. ВИБІРКА ДАНИХ (SELECT)
// Ми використовуємо ->query() для простих запитів без змінних
$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll(); // Отримуємо всі рядки


// 3. ПІДГОТОВЛЕНІ ЗАПИТИ (Безпека!)
// Якщо ми використовуємо дані від користувача (наприклад, $_GET['id']), 
// НЕ МОЖНА просто вставляти їх в рядок запиту! Це діра SQL Injection.
// Треба використовувати знаки питання (?) або іменовані параметри (:name).

$searchPrice = 1000;

// Погано (НЕ РОБІТЬ ТАК): 
// $pdo->query("SELECT * FROM products WHERE price > $searchPrice");

// Добре (Prepared Statement):
$sql = "SELECT * FROM products WHERE price > :price";
$stmt = $pdo->prepare($sql);
$stmt->execute(['price' => $searchPrice]);
$expensiveProducts = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>PDO: PHP + MySQL</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
        }
    </style>
</head>

<body>

    <h1>Товари з бази даних</h1>

    <h3>Всі товари:</h3>
    <ul>
        <?php foreach ($products as $p): ?>
            <li>
                <strong><?php echo htmlspecialchars($p['title']); ?></strong>
                - <?php echo $p['price']; ?> грн
                (Кількість: <?php echo $p['quantity']; ?>)
            </li>
        <?php endforeach; ?>
    </ul>

    <h3>Товари дорожчі за <?php echo $searchPrice; ?> грн:</h3>
    <ul>
        <?php foreach ($expensiveProducts as $p): ?>
            <li style="color: darkred;">
                <?php echo htmlspecialchars($p['title']); ?> - <?php echo $p['price']; ?> грн
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>