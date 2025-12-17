<?php
/*
 * УРОК 5: Умовні конструкції (If, Else, Switch)
 * 
 * Дозволяють виконувати різний код залежно від умов.
 */

$hour = 14; // Година (24-годинний формат)

// --- 1. IF / ELSEIF / ELSE ---

if ($hour < 12) {
    $message = "Доброго ранку!";
} elseif ($hour < 18) {
    $message = "Добрий день!";
} else {
    $message = "Добрий вечір!";
}

// --- 2. ТЕРНАРНИЙ ОПЕРАТОР ---
// Скорочений запис if...else
// Умова ? Значення_якщо_True : Значення_якщо_False

$isLogged = true;
// Якщо увійшов -> "Профіль", інакше -> "Вхід"
$btnText = $isLogged ? "Мій Профіль" : "Увійти";

// --- 3. SWITCH (для перевірки одного значеня на багато варіантів) ---
$color = "red";

switch ($color) {
    case "red":
        $meaning = "Стоп";
        break; // Обов'язково break, інакше піде далі!
    case "yellow":
        $meaning = "Увага";
        break;
    case "green":
        $meaning = "Їдь";
        break;
    default:
        $meaning = "Невідомий сигнал";
}

// --- 4. MATCH (Нове в PHP 8.0 - крутіша версія Switch) ---
// Повертає значення, не потребує break, суворе порівняння (===)
$statusCode = 404;

$statusText = match ($statusCode) {
    200 => "OK",
    404 => "Not Found",
    500 => "Server Error",
    default => "Unknown Status",
};

?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Урок 5 - Умови</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }

        .box {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
            background: #f0f8ff;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    <h1>Умови</h1>

    <div class="box">
        <h3>Привітання за часом (<?php echo $hour; ?> год):</h3>
        <p style="font-size: 1.5em; color: green;"><?php echo $message; ?></p>
    </div>

    <div class="box">
        <h3>Кнопка (Тернарний):</h3>
        <button><?php echo $btnText; ?></button>
    </div>

    <div class="box">
        <h3>Світлофор (Switch):</h3>
        <p>Колір: <strong><?php echo $color; ?></strong> -> <?php echo $meaning; ?></p>
    </div>

    <div class="box">
        <h3>Статус сервера (Match):</h3>
        <p>Код <?php echo $statusCode; ?>: <strong><?php echo $statusText; ?></strong></p>
    </div>

</body>

</html>