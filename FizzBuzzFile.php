<?php

$file_name = "./FizzBuzzFile.txt";

for($i = 1; $i <= 100; ++$i) {
    if ( ($i % 15) === 0 ) {
        
        file_put_contents($file_name, "Fizz Bizz \n", FILE_APPEND | LOCK_EX);
        
    } else if ( ($i % 5) === 0) {
        
        file_put_contents($file_name, "Bizz \n", FILE_APPEND | LOCK_EX);
        
    } else if ( ($i % 3) === 0) {
        
        file_put_contents($file_name, "Fizz \n", FILE_APPEND | LOCK_EX);
        
    } else {
        
        file_put_contents($file_name, "{$i} \n", FILE_APPEND | LOCK_EX);
        
    }
}