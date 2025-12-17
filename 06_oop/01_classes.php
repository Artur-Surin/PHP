<?php

// 1. Оголошення класу (Class)
// Клас - це шаблон або креслення для створення об'єктів.
class User
{
    // Властивості (Properties) - це змінні всередині класу.
    public $name;
    public $age;

    // Конструктор (Constructor) - спеціальний метод, який запускається автоматично при створенні об'єкта.
    // Зазвичай використовується для ініціалізації властивостей.
    public function __construct($name, $age)
    {
        $this->name = $name; // $this вказує на поточний об'єкт
        $this->age = $age;
    }

    // Методи (Methods) - це функції всередині класу.
    public function introduce()
    {
        return "Привіт! Мене звати {$this->name}, мені {$this->age} років.";
    }

    public function changeName($newName)
    {
        $this->name = $newName;
    }
}

// 2. Створення об'єкта (Object)
// Об'єкт - це екземпляр класу.
$user1 = new User("Олександр", 25);
$user2 = new User("Марія", 30);

// 3. Використання об'єктів
echo "<h3>Користувач 1:</h3>";
echo $user1->introduce(); // Виклик методу
echo "<br>";

echo "<h3>Користувач 2:</h3>";
echo $user2->introduce();
echo "<br>";

// Зміна властивості через метод
$user1->changeName("Олексій");
echo "<br>Після зміни імені користувача 1:<br>";
echo $user1->introduce();

echo "<hr>";

// Практичне завдання:
// Спробуйте створити клас 'Product' з властивостями 'title', 'price'
// та методом 'getInfo()', який виводить інформацію про товар.

class Product
{
    public $title;
    public $price;

    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function getInfo()
    {
        return "Назва: {$this->title}, Ціна: {$this->price}";
    }
}

$product1 = new Product("Телефон", 1000);
echo $product1->getInfo();
