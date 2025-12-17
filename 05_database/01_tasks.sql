-- --------------------------------------------------------
-- ПРАКТИКА SQL (Виконуйте ці запити в HeidiSQL або phpMyAdmin)
-- --------------------------------------------------------

-- 1. СТВОРЕННЯ ТАБЛИЦІ
-- Створіть таблицю `products` (товари) в базі `php_course`.
-- Поля:
--   - id (INT, AUTO_INCREMENT, PRIMARY KEY)
--   - title (VARCHAR 255, NOT NULL) - назва товару
--   - price (DECIMAL 10,2) - ціна (наприклад 100.50)
--   - quantity (INT) - кількість на складі

-- ВАШ КОД ТУТ:
-- CREATE TABLE ...
    CREATE TABLE products_test (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        price DECIMAL(10,2),
        quantity INT
    );


-- 2. ВСТАВКА ДАНИХ (INSERT)
-- Додайте 3 різні товари в таблицю `products`:
-- Наприклад: "Laptop" (15000, 5), "Mouse" (500, 20), "Keyboard" (1200, 10).

-- ВАШ КОД ТУТ:
-- INSERT INTO ...
    INSERT INTO products (title, price, quantity) VALUES
    ('Laptop', 15000, 5),
    ('Mouse', 500, 20),
    ('Keyboard', 1200, 10);


-- 3. ВИБІРКА ДАНИХ (SELECT)
-- а) Виберіть всі товари.
-- б) Виберіть товари, ціна яких менша за 2000.

-- ВАШ КОД ТУТ:
-- SELECT ...
    SELECT * FROM products;
    SELECT * FROM products WHERE price < 2000;


-- 4. ОНОВЛЕННЯ ДАНИХ (UPDATE)
-- Змініть ціну "Mouse" на 550.

-- ВАШ КОД ТУТ:
-- UPDATE ...
    UPDATE products SET price = 550 WHERE title = 'Mouse';

-- 5. ВИДАЛЕННЯ ДАНИХ (DELETE)
-- Видаліть товар "Keyboard" з таблиці.

-- ВАШ КОД ТУТ:
-- DELETE ...
    DELETE FROM products WHERE title = 'Keyboard';

