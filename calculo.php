<?php 

$mensagem = "";

if ($_POST) {
$distancia = $_POST['distancia']; //Pegando informações do for distancia da label formulario
$autonomia = $_POST['autonomia']; //Pegando informações do for autonomia da label formulario

    if (is_numeric($distancia) && is_numeric($autonomia)){
        if ($distancia > 0 && $autonomia > 0){
        $valorGasolina = 4.80;
        $valorAlcool = 3.80;
        $valorDiesel = 3.90;

        $calculoGasolina = ($distancia / $autonomia) *$valorGasolina;
            $calculoGasolina = number_format($calculoGasolina, 2, ',', '.'); //Definindo duas casa depois da virgula

        $calculoAlcool = ($distancia / $autonomia) * $valorAlcool;
            $calculoAlcool = number_format($calculoAlcool, 2,',', '.');

        $calculoDiesel = ($distancia / $autonomia) * $valorDiesel;
            $calculoDiesel = number_format($calculoDiesel, 2, ',', '.');


        $mensagem.="<p>O valor do consumo em R$ para Gasolina foi de: R$ " .$calculoGasolina."</p>";
        $mensagem.= "<p>O valor do consumo em R$ para Alcool foi de: R$ " .$calculoAlcool."</p>";
        $mensagem.= "<p>O valor do consumo em R$ para Diesel fo de: R$ " .$calculoDiesel."</p>";
        }else {
            $mensagem.= "<p> O valor da distancia e autonomia deve ser maior que zero. </p>";
        }
    }else {
        $mensagem.= "<p> O valor recebido não é numerico</p>";
    }

} else {
    $mensagem.= "<p> Nenhum dado foi recebido pelo formulário.</p>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <title>Calculo de Consumo de Combustível</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">   
</head>
<body>  
    <main>
        <div class="painel">
            <h2>Resultado do cálculo de consumo</h2>
            <div class="conteudo-painel"> 
                <?php
                echo $mensagem;
                ?>
                <a class="botao" href="index.php">Voltar</a>
            </div>            
        </div>  
    </main>  
</body>
</html>