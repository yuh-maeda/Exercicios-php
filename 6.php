<?php
if(isset($_POST['palavra'])){

    $string = $_POST['palavra'];

    for($x=0; $x<strlen($string); $x++){

    if( $string[$x] == 'a' || $string[$x] == 'e' || $string[$x] == 'i' || $string[$x] == 'o' || $string[$x] == 'u' || $string[$x] == 'A' || $string[$x] == 'E' || $string[$x] == 'I' || $string[$x] == 'O' || $string[$x] == 'U'){
        '';
    }

    else{
        echo $string[$x];

    }
    }

}
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="numb1">Digite uma palavra</label>
        <input type="text" name="palavra" id="palavra">

        <input type="submit" value="Enviar palavra">

    </form>


</body>
</html>

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