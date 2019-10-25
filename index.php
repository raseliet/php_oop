<?php

declare (strict_types = 1);

require 'functions/file.php';
require 'classes/FileDB.php';
require 'classes/Drinks/Drink.php';
require 'classes/Sandwiches/Sandwich.php';

// Gerimu lenteles pavadinimas
$drinks_table = 'drinks';

// Sumustiniu lenteles pavadinimas
$sandwiches_table = 'sandwiches';

// Gerimo objektas
$drink = new Drink([
    'name' => 'Alus',
    'amount_ml' => 500,
    'abarot' => 2,
    'image' => 'https://www.barbora.lt/api/Images/GetInventoryImage?id=0a60c3ce-a9eb-4e0f-892a-77f01548c741'
        ]);

var_dump($drink);

// Sumustinio objektas
$sandwich = new Sandwich([
    'name' => 'Su vistiena',
    'price' => 10,
    'vegan' => false,
    'image' => 'http://www.pasazas.lt/blog/wp-content/uploads/2015/08/DSC_0016-249x165.jpg'
        ]);

var_dump($sandwich);
// Duomenu bazes objektas
$db = new FileDB('data/db.txt');
$db->createTable($drinks_table);
$db->createTable($sandwiches_table);
$db->insertRow($drinks_table, $sandwich->getData());
$db->insertRow($sandwiches_table, $sandwich->getData());

unset($db); // Uzdaroma/ issaugoma duomenu baze


//$db->load();
//////pripildo objektą(užloadina), iš txt failo paima duomenis ir jsonu paverčia į array
//$db->load();
////
//////nurodytu indeksu įdeda vertę, nieko nereturnina
////$db->addRow('Vartotojai', ['name'=>'Rasa', 'surname' => 'Lietuvnikaite']);
////
////////array`ju issaugo i faila
//
////
////
//////$db->insertRow('Vartotojai', ['name'=>'Iveta', 'surname' => 'Isajevaite']);
////$db->insertRowIfNotExists('Vartotojai nauji', ['name'=>'Rasele', 'surname' => 'Kita pavarde'], 8);
////
//////$db->createTable('users');
////
//////var_dump($db->tableExists('users'));
//////$duomenys = $db->getData();
//////var_dump($duomenys);
////////var_dump($db->tableExists('users'));
////
//$db->save();
////
////
//var_dump($db->getData());
////
//////$1 - destruktoriaus iskvietimas;
////unset($db);
////
//////$2 - Kodo pabaiga;
////
//////$3 - F-jos pabaiga;
//
