<?php
/*
 * РІВЕНЬ 5, УРОК 1: Вступ до Баз Даних (SQL)
 * 
 * База даних (БД) — це організоване сховище інформації. Прямо як Excel-таблиці, але набагато потужніше.
 * Ми будемо використовувати MySQL (або MariaDB), яка йде в комплекті з Laragon.
 * 
 * SQL (Structured Query Language) — це мова, якою ми "спілкуємось" з базою даних.
 * 
 * ОСНОВНІ ОПЕРАЦІЇ (CRUD):
 * 1. Create (Створити) -> INSERT
 * 2. Read   (Читати)   -> SELECT
 * 3. Update (Оновити)  -> UPDATE
 * 4. Delete (Видалити) -> DELETE
 */
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Вступ до SQL</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 30px;
            line-height: 1.6;
            background-color: #fce4ec;
        }

        h1,
        h2,
        h3 {
            color: #880e4f;
        }

        code {
            background: #fff;
            padding: 2px 5px;
            border-radius: 4px;
            font-weight: bold;
            color: #d81b60;
        }

        pre {
            background: #263238;
            color: #eceff1;
            padding: 15px;
            border-radius: 8px;
            overflow-x: auto;
        }

        .task {
            background: white;
            padding: 20px;
            border-left: 5px solid #d81b60;
            margin: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <h1>🗄️ Рівень 5.1: Основи SQL</h1>

    <p>Для виконання цього уроку вам потрібно відкрити інструмент керування базою даних.</p>
    <ul>
        <li><strong>HeidiSQL</strong> (є кнопка "Database" в Laragon).</li>
        <li>Або <strong>phpMyAdmin</strong> (зазвичай за адресою <a href="http://localhost/phpmyadmin"
                target="_blank">http://localhost/phpmyadmin</a>).</li>
    </ul>

    <h2>1. Створення Бази Даних</h2>
    <p>Створіть нову базу даних з назвою <code>php_course</code>.</p>
    <pre>CREATE DATABASE php_course;
USE php_course;</pre>

    <h2>2. Створення Таблиці (users)</h2>
    <p>Таблиці складаються зі стовпців. Кожен стовпець має тип даних.</p>
    <pre>
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- Унікальний номер (1, 2, 3...)
    name VARCHAR(100) NOT NULL,         -- Рядок до 100 символів
    email VARCHAR(100) UNIQUE,          -- Email має бути унікальним
    age INT,                            -- Ціле число
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Час створення
);</pre>

    <h2>3. CRUD Операції</h2>

    <h3>INSERT (Вставка даних)</h3>
    <pre>INSERT INTO users (name, email, age) VALUES ('Ivan', 'ivan@test.com', 25);
INSERT INTO users (name, email, age) VALUES ('Maria', 'maria@test.com', 19);</pre>

    <h3>SELECT (Вибірка даних)</h3>
    <pre>SELECT * FROM users;              -- Вибрати ВСЕ
SELECT name, email FROM users;    -- Тільки імена та пошти
SELECT * FROM users WHERE age > 20; -- Тільки старших за 20 років</pre>

    <h3>UPDATE (Оновлення)</h3>
    <pre>UPDATE users SET age = 26 WHERE name = 'Ivan';</pre>

    <h3>DELETE (Видалення)</h3>
    <pre>DELETE FROM users WHERE id = 1;</pre>

    <div class="task">
        <h3>🚀 ПРАКТИЧНЕ ЗАВДАННЯ</h3>
        <p>Відкрийте файл <code>01_tasks.sql</code>. Там записані завдання.</p>
        <p>Напишіть відповідні SQL запити у тому файлі, а потім <strong>виконайте їх</strong> у вашому менеджері баз
            даних (HeidiSQL / phpMyAdmin), щоб перевірити, чи вони працюють.</p>
    </div>

</body>

</html>