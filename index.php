<?php

require 'functions/file.php';
require 'classes/FileDB.php';


$FileDB = new FileDB('data/failas.txt');

var_dump($FileDB);
