<?php

// ПРИНЦИПИ ООП: Інкапсуляція та Наслідування

// 1. Інкапсуляція (Encapsulation)
// Це приховування внутрішньої реалізації та захист даних.
// public - доступно всім.
// protected - доступно в цьому класі та класах-спадкоємцях.
// private - доступно ТІЛЬКИ в цьому класі.

class BankAccount
{
    private $balance = 0; // Ніхто ззовні не може змінити баланс напряму!

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Поповнено на $amount. ";
        }
    }

    public function getBalance()
    {
        return $this->balance; // Ми дозволяємо тільки ЧИТАТИ баланс
    }
}

$account = new BankAccount();
$account->deposit(100);
// $account->balance = 1000000; // Помилка! Не можна змінити private властивість.
echo "Баланс: " . $account->getBalance() . "<br>";
echo "<hr>";


// 2. Наслідування (Inheritance)
// Це механізм, коли один клас (Дочірній) переймає властивості та методи іншого (Батьківського).

// Батьківський клас
class Animal
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function speak()
    {
        return "Якась тварина видає звук...";
    }
}

// Дочірній клас (спадкує Animal)
class Dog extends Animal
{
    // Можемо перевизначити метод батька
    public function speak()
    {
        return "Гав-гав!";
    }

    public function guard()
    {
        return "Я охороняю будинок!";
    }
}

class Cat extends Animal
{
    public function speak()
    {
        return "Мяу!";
    }
}

// Використання
$dog = new Dog("Рекс");
echo $dog->name . " каже: " . $dog->speak() . "<br>";
echo $dog->guard() . "<br>";

$cat = new Cat("Мурчик");
echo $cat->name . " каже: " . $cat->speak() . "<br>";

// $cat->guard(); // Помилка! У котів немає методу guard.

echo "<hr>";

// Практичне завдання:
// 1. Створіть клас 'Vehicle' (Транспорт) з властивістю $speed.
// 2. Створіть метод 'move()', який виводить "Рухається зі швидкістю $speed км/год".
// 3. Створіть клас 'Car', який наслідує 'Vehicle'.
// 4. Додайте в 'Car' метод 'honk()', який виводить "Бі-бі!".

class Vehicle
{
    public $speed;

    public function __construct($speed)
    {
        $this->speed = $speed;
    }

    public function move()
    {
        echo "Рухається зі швидкістю $this->speed км/год";
    }
}

class Car extends Vehicle
{
    public function honk()
    {
        echo "Бі-бі!";
    }
}

$car = new Car(120);
$car->move();
$car->honk();

