<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="diaSemana">Selecione um dia da semana </label>
        <select name="diaSemana" id="diaSemana">
            <option value="Domingo">Domingo</option>
            <option value="Segunda-feira">Segunda-feira</option>
            <option value="Terça-feira">Terça-feira</option>
            <option value="Quarta-feira">Quarta-feira</option>
            <option value="Quinta-feira">Quinta-feira</option>
            <option value="Sexta-feira">Sexta-feira</option>
            <option value="Sabado">Sabado</option>
        </select>

        <label for="dia">Digite um dia</label>
        <input type="number" name="dia" id="dia">
        
        <label for="Mês">Selecione um mês </label>
        <select name="mes" id="mes">
            <option value="janeiro">Janeiro</option>
            <option value="fevereiro">Fevereiro</option>
            <option value="marco">Março</option>
            <option value="abril">Abril</option>
            <option value="junho">Junho</option>
            <option value="julho">Julho</option>
            <option value="setembro">Setembro</option>
            <option value="outubro">Outubro</option>
            <option value="novembro">Novembro</option>
            <option value="dezembro">Dezembro</option>
        </select>

        <label for="ano">Digite um ano</label>
        <input type="number" name="ano" id="ano">

        <input type="submit" value="Enviar data">

    </form>


</body>
</html>

<?php
if(isset($_POST['diaSemana']) && isset($_POST['dia']) && isset($_POST['mes']) && isset($_POST['ano'])){

    if( $_POST['dia']<=0 || $_POST['dia']>31 || $_POST['ano'] <=0){
        echo 'Data inválida';
    }
    else{
        echo $_POST['diaSemana'] . ',' . $_POST['dia'] . ' de ' . $_POST['mes'] . ' de ' . $_POST['ano'];
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
        flex-direction: row;
        height: 100vh;
        gap: 25px;
    }

    form{
        border-radius: 20px;
        width: 15vw;
        text-align: center;
        color: white;
        font-size: 22px;
        background-color: #171720;
        padding: 20px;
        gap: 25px;
        display: flex;
        flex-direction: column; 
    }

</style>