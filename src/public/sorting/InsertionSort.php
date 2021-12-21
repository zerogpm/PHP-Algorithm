<?php

namespace MyApp\Public\Sorting;

class InsertionSort
{
    public $arr;
    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function sort() {

        for ($i = 1; $i < count($this->arr); $i++) {

            for ($j = $i; $j > 0; $j--) {
                if ($this->arr[$j] < $this->arr[$j - 1]) {
                    $temp = $this->arr[$j];
                    $this->arr[$j] = $this->arr[$j - 1];
                    $this->arr[$j - 1] = $temp;
                } else {
                    break;
                }
            }
        }

        return $this->arr;

    }
}