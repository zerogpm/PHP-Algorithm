<?php

namespace MyApp\Public\Sorting;

class MergeSort {
    public $left;
    public $right;

    public function __construct($left, $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function merge() {
        $results = [];
        while(count($this->left) && count($this->right) ) {
            if($this->left[0] < $this->right[0]) {
                $results[] = array_shift($this->left);
            } else {
                $results[] = array_shift($this->right);
            }
        }
        return array_merge($results, $this->left, $this->right);
    }
}