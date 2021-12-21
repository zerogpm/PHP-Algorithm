<?php

use MyApp\Public\Sorting\InsertionSort;

require_once realpath("../../vendor/autoload.php");


$insertion = new InsertionSort([0,2,3,1]);

var_dump($insertion->sort());