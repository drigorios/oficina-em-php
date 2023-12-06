<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8"
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina do Drigo</title>
</head>

<body>
    <h1>Oficina do Drigo</h1>
    <h2>Pedidos:</h2>
    <?php
     $pneu = $_POST ['pneu'];
     $oleo = $_POST ['oleo'];
     $velas = $_POST ['velas'];

    echo '<p>Processo processado ás:'
    .date('H:i, d/m/y')
    .'</p>';
    
    echo $pneu .' pneus <br>';
    echo $oleo .' óleos <br>';
    echo $velas .' svelas <br>';
    
    ?>
    <a href="index.php">Voltar</a>
</body>

</html>