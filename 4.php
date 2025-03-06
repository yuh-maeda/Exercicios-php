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
        <label for="largura">Digite a largura</label>
        <input type="number" name="largura" id="largura">
        
        <label for="comprimento">Digite o comprimento</label>
        <input type="number" name="comprimento" id="comprimento">

        <input type="submit" value="Enviar dados">

    </form>


</body>
</html>


<?php

if(isset($_POST['largura']) & isset($_POST['comprimento'])){

    echo calcular_area($_POST['largura'],$_POST['comprimento']);

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