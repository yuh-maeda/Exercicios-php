<?php

$count=0;

while($count <100){
    $count+=1;
    if($count % 3 == 0 & $count % 5 == 0){
        echo 'AB';
    }
    elseif($count % 5 == 0){
        echo 'B';
    }
    elseif($count % 3 == 0){
        echo 'A';
    }
    else{
        echo $count;
    }

    echo '<br>';

}


?>