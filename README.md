FakerRestaurant
=======================

Food and Beverage names generate using fzaninotto/Faker


Installation
------------

Add the FakerRestaurant library to your `composer.json` file:

```
composer require m-shbieb/faker-restaurant --dev

```

Usage
-----

To  use this with [Faker](https://github.com/fzaninotto/Faker), you must add the `FakerRestaurant\Restaurant` class to the Faker generator:

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \FakerRestaurant\Provider\ar_SA\Restaurant($faker));

// Generator
$faker->foodName();      // A random Food Name
$faker->beverageName();  // A random Beverage Name
$faker->dairyName();  // A random Dairy Name
$faker->vegetableName();  // A random Vegetable Name
$faker->fruitName();  // A random Fruit Name
$faker->meatName();  // A random Meat Name
$faker->sauceName();  // A random Sauce Name
```

Language specific formatters
-----

```
ar_SA -> \FakerRestaurant\Provider\ar_SA\Restaurant
en_US -> \FakerRestaurant\Provider\en_US\Restaurant
fr_FR -> \FakerRestaurant\Provider\fr_FR\Restaurant
pt_BR -> \FakerRestaurant\Provider\pt_BR\Restaurant
ja_JP -> \FakerRestaurant\Provider\ja_JP\Restaurant
```
