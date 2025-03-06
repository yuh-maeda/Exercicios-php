<?php

$arquivo = file('arq.txt');

foreach($arquivo as $item){
    echo $item . '<br>';
}
echo "Final do conteúdo";

?>