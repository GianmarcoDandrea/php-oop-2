<?php
require_once __DIR__ . '/../Models/category.php';
require_once __DIR__ . '/../Models/product.php';
require_once __DIR__ . '/../Models/food.php';
require_once __DIR__ . '/../Models/kennel.php';
require_once __DIR__ . '/../Models/toy.php';


// Organizzare i prodotti in un array
$categories = [
    $dog = new Category(),
    $cat = new Category()
];

$dog->setName('Dogs');
$dog->setIcon('Assets/Img/Dog.png');

$cat->setName('Cats');
$cat->setIcon('Assets/Img/Cat.png');

$products = [
    //FOOD
    $cat_food = new Food(),
    $dog_food = new Food(),

    //KENNEL
    $cat_kennel = new Kennel(),
    $dog_kennel = new Kennel(),

    // TOY
    $cat_toy = new Toy(),
    $dog_toy = new Toy()
];

// CAT FOOD 
try {
    $cat_food->setName('SalmonKibble');
    $cat_food->setPrice(9.50);
    $cat_food->setImg('Assets/Img/CatFood.png');
    $cat_food->setCategory($cat);
    $cat_food->setExpire('2025-10-5');
    $cat_food->setDimension(30);
} catch (Exception $e) {
    echo "Info not available";
};


//DOG FOOD
try {
    $dog_food->setName('ChickenBiscuits');
    $dog_food->setPrice(10.50);
    $dog_food->setImg('Assets/Img/DogFood.png');
    $dog_food->setCategory($dog);
    $dog_food->setExpire('2025-10-5');
    $dog_food->setDimension(50);
} catch (Exception $e) {
    echo "Info not available";
};

// CAT KENNEL
try {
    $cat_kennel->setName('Cushion');
    $cat_kennel->setPrice(35.90);
    $cat_kennel->setImg('Assets/Img/CatKennel.png');
    $cat_kennel->setCategory($cat);
    $cat_kennel->setType('Indoor');
    $cat_kennel->setDimension(250);
} catch (Exception $e) {
    echo "Info not available";
};

//DOG KENNEL
try {
    $dog_kennel->setName('WoodKennel');
    $dog_kennel->setPrice(69.00);
    $dog_kennel->setImg('Assets/Img/DogKennel.png');
    $dog_kennel->setCategory($dog);
    $dog_kennel->setType('Outdoor');
    $dog_kennel->setDimension(400);
} catch (Exception $e) {
    echo "Info not available";
};

// CAT TOY
try {
    $cat_toy->setName('Mouse');
    $cat_toy->setPrice(18.50);
    $cat_toy->setImg('Assets/Img/CatToy.png');
    $cat_toy->setCategory($cat);
    $cat_toy->setMaterial('Plastic');
    $cat_toy->setDimension(20);
} catch (Exception $e) {
    echo "Info not available";
};

//DOG TOY
try {
    $dog_toy->setName('Bone');
    $dog_toy->setPrice(15.90);
    $dog_toy->setImg('Assets/Img/DogToy.png');
    $dog_toy->setCategory($dog);
    $dog_toy->setMaterial('Nylon');
    $dog_toy->setDimension(25);
} catch (Exception $e) {

    echo "Info not available";
};
