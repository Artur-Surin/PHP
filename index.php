<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Мій курс PHP</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            max-width: 800px;
            margin: 20px auto;
            line-height: 1.6;
            background-color: #f4f4f9;
            color: #333;
        }

        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background: #fff;
            margin: 10px 0;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s;
            border-left: 5px solid #3498db;
        }

        li:hover {
            transform: translateX(5px);
        }

        a {
            text-decoration: none;
            color: #2c3e50;
            font-weight: bold;
            display: block;
        }

        .filename {
            color: #7f8c8d;
            font-size: 0.9em;
            font-weight: normal;
            margin-left: 10px;
        }

        .roadmap-link {
            margin-top: 30px;
            display: inline-block;
            background: #2c3e50;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .roadmap-link:hover {
            background: #34495e;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <h1>🚀 Мій прогрес у вивченні PHP</h1>

    <p>Список доступних уроків:</p>

    <?php
    // Список папок, які ми хочемо сканувати
    $dirs = array_filter(glob('*'), 'is_dir');

    foreach ($dirs as $dir) {
        // Пропускаємо системні папки
        if ($dir === '.git' || $dir === '.idea' || $dir === '.vscode')
            continue;

        // Отримуємо назву розділу
        $sectionTitle = str_replace('_', ' ', ucfirst($dir));
        echo "<h2 style='margin-top: 30px; color: #555; border-bottom: 1px solid #ddd; padding-bottom: 5px;'>📂 $sectionTitle</h2>";
        echo "<ul>";

        // Скануємо файли в папці
        $files = glob("$dir/*.php");

        if (empty($files)) {
            echo "<li style='color: #999; font-style: italic; border-left: 3px solid #ccc;'>В цій папці поки немає файлів</li>";
        }

        foreach ($files as $file) {
            $filename = basename($file);

            // Робимо гарну назву
            $name = str_replace(['_', '.php'], [' ', ''], $filename);
            $name = ucfirst($name);

            echo "<li>";
            echo "<a href='$file'>$name <span class='filename'>($dir/$filename)</span></a>";
            echo "</li>";
        }
        echo "</ul>";
    }

    // Також покажемо файли в корені, якщо є (крім index.php)
    $rootFiles = glob("*.php");
    $hasRootFiles = false;
    foreach ($rootFiles as $f) {
        if ($f !== 'index.php') {
            $hasRootFiles = true;
            break;
        }
    }

    if ($hasRootFiles) {
        echo "<h2 style='margin-top: 30px; color: #555; border-bottom: 1px solid #ddd; padding-bottom: 5px;'>📄 Інші файли</h2>";
        echo "<ul>";
        foreach ($rootFiles as $file) {
            if ($file == 'index.php')
                continue;

            $name = str_replace(['_', '.php'], [' ', ''], $file);
            $name = ucfirst($name);

            echo "<li>";
            echo "<a href='$file'>$name <span class='filename'>($file)</span></a>";
            echo "</li>";
        }
        echo "</ul>";
    }
    ?>

    <a href="PHP_Roadmap.md" class="roadmap-link">📖 Відкрити план навчання (Roadmap)</a>

</body>

</html>