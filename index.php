<?php
    for($i = 1; $i <101; $i++){
        //echo $i.'<br/>';
        if($i%3==0&&$i%5==0){
            echo 'fizzbuzz'.PHP_EOL;
        }elseif($i%5==0){
            echo 'buzz'.PHP_EOL;
        }elseif($i%3==0){
            echo 'fizz'.PHP_EOL;
        }else{
            echo $i.PHP_EOL;
        }
    }
?>