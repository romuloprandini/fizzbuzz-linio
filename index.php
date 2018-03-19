<?php 
$words = [0 => 'Linianos', 1=> 'IT', 2 => 'linio'];

function mod($number, $divider) {
    return ceil(($number % $divider) / 10);
}

for ($number = 1; $number <= 100; $number++) {
    
    $multiple = mod($number,3) + 2 * mod($number,5);
    
    if($multiple <= 2) {
        echo($words[$multiple].' ');
        continue;
    }

    echo($number.' ');
}
