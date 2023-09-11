<?php


    echo '<pre>';

    $x = 100;
    $y = 150;
    $resultado = $x + $y;

    echo $resultado;

echo '<pre> ------------------';

    $numero = 50;

    echo '<pre>', $numero * 4;

echo '<pre> ------------------';

    $a = 15;
    $b = 15;
    $c = 15;

    echo '<pre>', ($a * 5) + ($b * 10) + ($c * 15);

echo '<pre>-------------------';

    $a = 20; 
    $b = 20;
    $c = 5;
    $d = 5;

    $resultado1 = $a + $b;
    $resultado2 = $resultado1 / ($c + $d);

    echo '<pre>',$resultado2;

echo '<pre>-------------------';

    $soma_lados = 3.2 * 4;
    echo '<pre>',$soma_lados,"m";


    $nome = 'Michael';

    //Ex 2


    $lojas = [
        'lisboa' => 'lisboa@gmail.com',
        'porto' => 'porto@gmail.com',
        'coimbra' => 'coimbra@gmail.com',
        'São Paulo' => 'SãoPaulo@gov.br'
    ];

    $cidade = 'Brasil';

    //Ex 3

    $mensagem_erro = '';
    $css = '';
    $mensagem = null;

    if(!empty($mensagem_erro)){
        $css = 'erro';
        $mensagem = $mensagem_erro;
    } else {
        $css = 'sucesso';
        $mensagem = 'sem erros';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula-exercicios</title>
    <style>
        * {
            margin: 0 auto;
            padding: 5px;
            background-color: darkgrey;
        }
        .sucesso {
            color: white;
            background-color: darkgreen;
        }
        .erro {
            color: white;
            background-color: darkred;
        }
    </style>
</head>
<body>

    <?php if($nome == "joão"): ?>
    <p>O nome é Michael</p>
    <?php elseif($nome == "Michael"): ?>
    <p>O nome é Michael!</p>
    <?php elseif($nome == "Carlos"): ?>
    <p>O nome é Carlos</p>
    <?php else: ?>
    <p>É um nome desconhecido</p>
    <?php endif; ?>

    <!-- Ex 2 -->

        <?php if(key_exists($cidade, $lojas)): ?>
            <h3><?= $cidade ?></h3>
            <p><?= $lojas[$cidade]?></p>
        <?php else: ?>
            <p>Não existe nenhuma loja na cidade indicada.</p>
        <?php endif;?>

    <!-- Ex 3 -->
    
    <div class="<?= $css ?>"><?= $mensagem ?></div>




</body>
</html>

