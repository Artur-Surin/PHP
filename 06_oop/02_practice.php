<?php

echo "<h1>Практика ООП</h1>";

// ЗАДАЧА 1: Калькулятор
// Створіть клас 'Calculator', який має два методи:
// - add($a, $b) - повертає суму
// - subtract($a, $b) - повертає різницю
//
// Створіть об'єкт цього класу і виведіть результати обчислень.

echo "<h2>Задача 1: Калькулятор</h2>";
// Ваш код тут:
class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function subtract($a, $b)
    {
        return $a - $b;
    }
}

$calc = new Calculator();
echo $calc->add(5, 3) . "<br>";
echo $calc->subtract(5, 3) . "<br>";



echo "<hr>";

// ЗАДАЧА 2: Студент та оцінки
// Створіть клас 'Student', який має властивості:
// - $name (ім'я)
// - $grades (масив оцінок, за замовчуванням порожній масив [])
//
// Методи:
// - __construct($name) - задає ім'я
// - addGrade($grade) - додає оцінку в масив $grades
// - getAverageGrade() - повертає середній бал (сума / кількість)
//
// Перевірка:
// Створіть студента, додайте йому 3 оцінки (наприклад, 10, 12, 8) і виведіть середній бал.

echo "<h2>Задача 2: Студент</h2>";
// Ваш код тут:
class Student
{
    public $name;
    public $grades = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addGrade($grade)
    {
        $this->grades[] = $grade;
    }

    public function getAverageGrade()
    {
        return array_sum($this->grades) / count($this->grades);
    }
}

$student = new Student("John");
$student->addGrade(10);
$student->addGrade(12);
$student->addGrade(8);
echo $student->name . "<br>";
echo $student->getAverageGrade();

echo "<hr>";

// ЗАДАЧА 3: Банківський рахунок (Симуляція)
// Створіть клас 'BankAccount', який має властивість:
// - $balance (баланс, за замовчуванням 0)
//
// Методи:
// - deposit($amount) - додає гроші на рахунок і виводить повідомлення "Внесено: $amount. Поточний баланс: ...".
// - withdraw($amount) - знімає гроші.
//   * Якщо грошей достатньо: знімає і виводить "Знято: $amount. Поточний баланс: ...".
//   * Якщо грошей НЕ достатньо: виводить "Помилка: недостатньо коштів!".
//
// Перевірка:
// Поповніть рахунок на 1000, зніміть 300, спробуйте зняти 2000.
echo "";
echo "<h2>Задача 3: Банк</h2>";
// Ваш код тут:
class BankAccount
{
    public $balance = 0;

    public function deposit($amount)
    {
        $this->balance += $amount;
        echo "Внесено: $amount. Поточний баланс: " . $this->balance . "<br>";
    }

    public function withdraw($amount)
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            echo "Знято: $amount. Поточний баланс: " . $this->balance . "<br>";
        } else {
            echo "Помилка: недостатньо коштів!";
        }
    }
}

$account = new BankAccount();
$account->deposit(1000);
$account->withdraw(300);
$account->withdraw(2000);