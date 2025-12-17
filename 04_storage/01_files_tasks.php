<?php
/*
 * --------------------------------------------------------------------------
 * ПРАКТИКА: ЛОГЕР ВІДВІДУВАНЬ
 * --------------------------------------------------------------------------
 */

$logFile = 'visits_log.txt';
$message = "";

// ЗАВДАННЯ 1: Очищення логу
// Якщо натиснуто кнопку "Очистити лог" (POST запит з кнопкою 'clear')
// -> Видаліть файл $logFile функцією unlink().
// -> Запишіть у $message повідомлення "Лог очищено!".

// TODO: Ваш код тут (видалення)
if (isset($_POST['clear'])) {
    unlink($logFile);
    $message = "Лог очищено!";
}

// ЗАВДАННЯ 2: Запис відвідування
// При кожному відкритті сторінки, додавайте у файл $logFile новий рядок:
// "[РІК-МІС-ДЕНЬ ГОД:ХВ:СЕК] Нове відвідування сторінки!\n"
// Використовуйте file_put_contents з прапорцем FILE_APPEND.
// date('Y-m-d H:i:s') допоможе з часом.

// TODO: Ваш код тут (запис)
file_put_contents($logFile, "[" . date('Y-m-d H:i:s') . "] Нове відвідування сторінки!\n", FILE_APPEND);

// ЗАВДАННЯ 3: Читання логу
// Прочитайте вміст файлу у змінну $logContent.
// Якщо файлу немає, $logContent має бути "Лог порожній".

// TODO: Ваш код тут (читання)
$logContent = ""; // Замініть це на читання
if (file_exists($logFile)) {
    $logContent = file_get_contents($logFile);
} else {
    $logContent = "Лог порожній";
}
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Практика: Логер</title>
    <style>
        body {
            font-family: monospace;
            padding: 20px;
            background: #2d2d2d;
            color: #eee;
        }

        .log-container {
            background: #1e1e1e;
            padding: 20px;
            border: 1px solid #444;
            white-space: pre-wrap;
            /* Зберігає переноси рядків */
            height: 300px;
            overflow-y: scroll;
            margin-bottom: 20px;
        }

        button {
            padding: 10px 20px;
            background: #d32f2f;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #b71c1c;
        }

        .msg {
            color: #81c784;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <h1>📝 Лог відвідувань</h1>

    <?php if ($message): ?>
        <p class="msg"><?php echo $message; ?></p>
    <?php endif; ?>

    <div class="log-container">
        <?php echo htmlspecialchars($logContent); ?>
    </div>

    <form method="POST">
        <button type="submit" name="clear">🗑️ Очистити лог</button>
    </form>

</body>

</html>