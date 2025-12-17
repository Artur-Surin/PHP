<?php
/*
 * РІВЕНЬ 4, УРОК 1: Робота з файловою системою
 * 
 * PHP вміє читати, записувати, створювати та видаляти файли на сервері.
 * Це корисно для логів, кешування, налаштувань або збереження простих даних без бази даних.
 */

$filename = 'example.txt';

// --- 1. ЗАПИС У ФАЙЛ (Прості методи) ---

// file_put_contents - найпростіший спосіб записати дані.
// Якщо файлу немає, він створиться. Якщо є - перезапишеться.
$text = "Привіт! Це перший рядок у файлі.\n";
file_put_contents($filename, $text);

// Щоб ДОДАТИ дані (append) замість перезапису, використовуємо прапорець FILE_APPEND
$moreText = "А це другий рядок, доданий пізніше.\n";
file_put_contents($filename, $moreText, FILE_APPEND);

echo "<h3>1. Записано у файл '$filename'</h3>";


// --- 2. ЧИТАННЯ З ФАЙЛУ ---

// file_get_contents - зчитує весь файл у рядок.
if (file_exists($filename)) {
    $content = file_get_contents($filename);

    // nl2br перетворює переноси рядків (\n) у теги <br> для браузера
    echo "<h3>2. Вміст файлу:</h3>";
    echo "<div style='background:#f0f0f0; padding:10px; border-left: 3px solid #333;'>";
    echo nl2br($content);
    echo "</div>";
} else {
    echo "Файл не знайдено!";
}


// --- 3. КЛАСИЧНИЙ СПОСІБ (fopen) ---
// Більш гнучкий, якщо треба читати/писати великі файли частинами.

$handle = fopen('classic_log.txt', 'a'); // 'a' = append (додавання в кінець)
// 'w' = write (перезапис), 'r' = read (читання)

$logMessage = "[" . date('Y-m-d H:i:s') . "] Запис через fopen\n";
fwrite($handle, $logMessage);
fclose($handle); // Обов'язково закривати файл!


// --- 4. ІНШІ КОРИСНІ ФУНКЦІЇ ---
// rename($old, $new) - перейменувати
// copy($source, $dest) - скопіювати
// unlink($filename) - видалити файл

?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Робота з файлами</title>
</head>

<body>
    <hr>
    <p>Оновіть сторінку, щоб побачити нові записи (через fopen).</p>

    <h4>Вміст classic_log.txt:</h4>
    <pre><?php echo file_exists('classic_log.txt') ? file_get_contents('classic_log.txt') : ''; ?></pre>
</body>

</html>