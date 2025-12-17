<?php
/*
 * --------------------------------------------------------------------------
 * ПРАКТИКА: ФОРМИ ТА ВАЛІДАЦІЯ
 * --------------------------------------------------------------------------
 */

// Ініціалізуємо змінні
$displayMessage = "";
$email = "";
$message = "";

// ========================================================================
// ЗАВДАННЯ:
// ========================================================================
// 1. Перевірте, чи була відправлена форма методом POST.
// 2. Отримайте дані з полів 'email' та 'message'.
// 3. Зробіть перевірку:
//    - Якщо хоча б одне поле порожнє -> запишіть в $displayMessage: "Помилка: Заповніть всі поля!".
//    - Якщо все ок -> запишіть: "Дякуємо! Ваше повідомлення отримано.".
// 
// 4. НЕ ЗАБУДЬТЕ використати htmlspecialchars() для виводу повідомлення, 
//    якщо ви будете виводити самі дані (це хороша звичка).

// TODO: Ваш код тут
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Пишіть тут...

}



// --- ТЕСТИ (Автоматична перевірка логіки) ---
// Цей блок коду імітує відправку форми для тестування вашого коду.
$tests = [];

// Тест 1: Порожні поля
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Емулюємо POST запит з порожніми полями
    $_SERVER['REQUEST_METHOD'] = 'POST';
    $_POST['email'] = '';
    $_POST['message'] = '';

    // Запускаємо шматок коду студента (через include, або просто копіюємо логіку? 
    // На жаль, в рамках одного файлу складно перезапустити виконаний код зверху.
    // Тому ми просто перевіримо змінні, якщо студент заповнив форму вручну, 
    // або попросимо його заповнити форму).

    // Спрощення: Ми будемо покладатися на те, що студент заповнює форму в браузері.
    // Але для автоматичної перевірки, ми підкажемо статус.
}
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Практика: Форма зворотного зв'язку</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #e8f5e9;
            padding: 40px;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-top: 5px solid #4CAF50;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background: #45a049;
        }

        .result {
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 4px;
            text-align: center;
        }

        .empty {
            background: #eee;
            color: #666;
        }

        .error {
            background: #ffebee;
            color: #c62828;
        }

        .success {
            background: #e8f5e9;
            color: #2e7d32;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Зв'яжіться з нами</h1>

        <!-- Блок виводу повідомлень -->
        <?php if ($displayMessage): ?>
            <div class="result <?php echo strpos($displayMessage, 'Помилка') !== false ? 'error' : 'success'; ?>">
                <?php echo $displayMessage; ?>
            </div>
        <?php else: ?>
            <div class="result empty">Тут буде результат...</div>
        <?php endif; ?>

        <form action="" method="POST">
            <label>Ваш Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>"
                placeholder="example@mail.com">

            <label>Повідомлення:</label>
            <textarea name="message" rows="4"
                placeholder="Напишіть щось..."><?php echo htmlspecialchars($message); ?></textarea>

            <button type="submit">Надіслати</button>
        </form>
    </div>
</body>

</html>