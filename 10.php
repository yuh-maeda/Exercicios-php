<?php

function calcular_area($comp,$larg){
    return 'A área do retângulo é ' . $larg * $comp;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="nome">Digite seu nome</label>
        <input type="text" name="nome" id="nome">
        
        <label for="idade">Digite sua idade</label>
        <input type="number" name="idade" id="idade">

        <input type="submit" value="Enviar dados">

    </form>


</body>
</html>


<?php

if(isset($_POST['nome']) & isset($_POST['idade'])){
    if($_POST['idade'] <= 0){
        echo'Idade inválida';
    }
    else{
        echo"Olá, " . $_POST['nome'] . '! Você tem ' . $_POST['idade'] . ' anos.';
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
        gap: 15px;
        display: flex;
        flex-direction: column; 
    }

</style>