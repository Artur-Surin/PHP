<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Мій курс PHP</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; max-width: 800px; margin: 20px auto; line-height: 1.6; background-color: #f4f4f9; color: #333; }
        h1 { color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px; }
        ul { list-style-type: none; padding: 0; }
        li { background: #fff; margin: 10px 0; padding: 15px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); transition: transform 0.2s; border-left: 5px solid #3498db; }
        li:hover { transform: translateX(5px); }
        a { text-decoration: none; color: #2c3e50; font-weight: bold; display: block; }
        .filename { color: #7f8c8d; font-size: 0.9em; font-weight: normal; margin-left: 10px; }
        .roadmap-link { margin-top: 30px; display: inline-block; background: #2c3e50; color: #fff; padding: 10px 20px; border-radius: 5px; }
        .roadmap-link:hover { background: #34495e; text-decoration: none; }
    </style>
</head>
<body>

    <h1>🚀 Мій прогрес у вивченні PHP</h1>
    
    <p>Список доступних уроків:</p>

    <ul>
        <?php
        // Отримуємо всі PHP файли в поточній папці
        $files = glob("*.php");

        foreach ($files as $file) {
            // Пропускаємо сам index.php
            if ($file == 'index.php')
                continue;

            // Робимо гарну назву (замінюємо підкреслення на пробіли і прибираємо .php)
            $name = str_replace(['_', '.php'], [' ', ''], $file);
            $name = ucfirst($name); // Перша літера велика
        
            echo "<li>";
            echo "<a href='$file'>$name <span class='filename'>($file)</span></a>";
            echo "</li>";
        }
        ?>
    </ul>

    <a href="PHP_Roadmap.md" class="roadmap-link">📖 Відкрити план навчання (Roadmap)</a>

</body>
</html>