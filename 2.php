<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="idade">Digite sua Idade</label>
        <input type="number" name="idade" id="idade">

        <input type="submit" value="Enviar idade">

    </form>


</body>
</html>


<?php

if(isset($_POST['idade'])){
    $idade = $_POST['idade'];

    if($idade <= 0){
        echo 'Isto não é uma idade';
    }
    elseif($idade < 18){
        echo 'Você é menor de idade';
    }
    elseif($idade >= 18 && $idade < 60){
        echo 'Você é maior de idade';
    }
    else{
        echo'Você é uma pessoa idosa';
    }

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
        background-color: #171720;
        padding: 20px;
        height: 12%;
        gap: 10px;
        display: flex;
        flex-direction: column; 
    }

</style>