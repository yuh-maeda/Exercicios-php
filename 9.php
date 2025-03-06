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
        <label for="email">Digite um email</label>
        <input type="text" name="email" id="email">

        <input type="submit" value="Enviar dados">

    </form>


</body>
</html>


<?php

$arroba = False;
$ponto = False;

if(isset($_POST['email'])){
    
    for($x=0; $x<strlen($_POST['email']); $x++){
        if ($_POST['email'][$x] == '@'){
            $arroba = True;
        }

        if ($_POST['email'][$x] == '.'){
            $ponto = True;
        }
    }

    if ($arroba & $ponto){
        echo 'Email válido';
    }
    else{
        echo'Email inválido';
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