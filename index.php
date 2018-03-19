<?php 
function fizzbuzz($size) { 
    foreach (range(1, $size) as $number) { 
        echo((array(0 => 'Linianos', 1=> 'IT', 2 => 'linio')[ceil(($number % 3) / 10) + 2 * ceil(($number % 5) / 10)] ?? $number).' '); 
    }
} 
fizzbuzz(100);
