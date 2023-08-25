<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    date('d/ m/Y H:i');
    
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d/ m/Y H:i');

    echo $data;

    $data_inicial = '2004-02-18';
    $data_final = '2023-02-18';

    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);
    $diferenca = ($time_final - $time_inicial) /86400;

    
    echo '<br/>';
    echo $diferenca
    
    ?>
</body>
</html>