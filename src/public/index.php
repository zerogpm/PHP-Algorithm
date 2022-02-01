<?php

use MyApp\Public\Sorting\InsertionSort;
use MyApp\Public\Sorting\MergeSort;

require_once realpath("../../vendor/autoload.php");


$insertion = new InsertionSort([0,2,3,1]);
$mergeSort = new MergeSort([2,3,4], [10,11,12]);

var_dump($mergeSort->merge());