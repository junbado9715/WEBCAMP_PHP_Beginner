<?php

function fibonacci($n) {
    $num_list = [1,1];
    
    if($n > 2){
        for($i = 2; $i <= $n - 1; $i++){
            $num_list[] = $num_list[$i -1] + $num_list[$i - 2];
        }
    }
    return $num_list[$n - 1];
}

echo fibonacci(10000);