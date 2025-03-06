<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="numb1">Digite o número 1</label>
        <input type="number" name="numb1" id="numb1">

        <label for="numb2">Digite o número 2</label>
        <input type="number" name="numb2" id="numb2">

        <input type="submit" value="Enviar números">

    </form>


</body>
</html>


<?php

if(isset($_POST['numb1']) && isset($_POST['numb2'])){

    echo 'Adição: ' . $_POST['numb1'] + $_POST['numb2'] . '<br>' . '<br>' ;
    echo 'Subtração: ' . $_POST['numb1'] - $_POST['numb2'] . '<br>' . '<br>' ;
    echo 'Multiplicação: ' . $_POST['numb1'] * $_POST['numb2'] . '<br>' . '<br>' ;
    echo 'Divisão: ' . $_POST['numb1'] / $_POST['numb2'] . '<br>' . '<br>' ;

}

?>

<style>
    *{
        font-family: sans-serif;
        padding: 0;
        margin: 0;
    }

    body{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        height: 100vh;
        gap: 25px;
    }

    form{
        border-radius: 20px;
        color: white;
        font-size: 25px;
        background-color: rgb(80,50,10);
        padding: 20px;
        height: 40%;
        gap: 10px;
        display: flex;
        flex-direction: column; 
    }

</style>