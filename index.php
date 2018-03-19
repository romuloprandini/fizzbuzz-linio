<?php 

function mod($number, $divider) {
    return ceil(($number % $divider) / 10);
}

function fizzbuzz($size) {
    $words = [0 => 'Linianos', 1=> 'IT', 2 => 'linio'];
    for ($number = 1; $number <= 100; $number++) {

        $multiple = mod($number,3) + 2 * mod($number,5);

        if($multiple <= 2) {
            echo($words[$multiple].' ');
            continue;
        }

        echo($number.' ');
    }
}

fizzbuzz(100);
