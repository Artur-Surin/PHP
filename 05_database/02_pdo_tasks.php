<?php
/*
 * --------------------------------------------------------------------------
 * ПРАКТИКА: СПИСОК СПРАВ (To-Do List)
 * --------------------------------------------------------------------------
 */

// 0. ПІДГОТОВКА БАЗИ ДАНИХ
// Перед початком, виконайте цей SQL запит в HeidiSQL/phpMyAdmin, щоб створити таблицю:
/*
   CREATE TABLE tasks (
       id INT AUTO_INCREMENT PRIMARY KEY,
       title VARCHAR(255) NOT NULL,
       is_done TINYINT DEFAULT 0
   );
*/

// 1. ПІДКЛЮЧЕННЯ
$host = '127.0.0.1';
$db = 'php_course';
$user = 'root';
$pass = ''; // В Laragon зазвичай пустий
$charset = 'utf8mb4';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (\PDOException $e) {
    die("Помилка БД: " . $e->getMessage());
}


// 2. ОБРОБКА ФОРМИ (ДОДАВАННЯ СПРАВИ)
// Якщо метод POST і є поле 'title' -> вставте нову справу в таблицю `tasks`.
// Використовуйте підготовлений запит (prepare + execute).

// TODO: Ваш код вставки (INSERT) тут


// 3. ВИДАЛЕННЯ СПРАВИ (За бажанням)
// Якщо в GET передано ?delete=ID -> видаліть цю справу.

// TODO: Ваш код видалення (DELETE) тут


// 4. ОТРИМАННЯ СПИСКУ СПРАВ
// Отримайте всі справи з таблиці `tasks` (ORDER BY id DESC).

// TODO: Ваш код вибірки (SELECT) тут
$tasks = []; // Замініть на результат з БД

?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Мій список справ</title>
    <style>
        body {
            font-family: sans-serif;
            max-width: 500px;
            margin: 40px auto;
            background: #f5f5f5;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .task-form {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        input[type="text"] {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background: #2196F3;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background: #1976D2;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background: white;
            padding: 15px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        li:first-child {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }

        li:last-child {
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
            border-bottom: none;
        }

        .delete-btn {
            color: #f44336;
            text-decoration: none;
            font-weight: bold;
        }

        .delete-btn:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <h1>✅ Список Справ</h1>

    <!-- Форма додавання -->
    <form method="POST" class="task-form">
        <input type="text" name="title" placeholder="Що треба зробити?" required>
        <button type="submit">Додати</button>
    </form>

    <!-- Список -->
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <span>
                    <?php echo htmlspecialchars($task['title']); ?>
                </span>
                <a href="?delete=<?php echo $task['id']; ?>" class="delete-btn">x</a>
            </li>
        <?php endforeach; ?>

        <?php if (empty($tasks)): ?>
            <li style="color: #999; justify-content: center;">Справ немає. Час відпочивати!</li>
        <?php endif; ?>
    </ul>

</body>

</html>