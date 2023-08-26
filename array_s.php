<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arrayteste = ['banana', 'maça', 'uva'];
        //procura um item dentro de um array
        echo in_array('banana',$arrayteste); // se for true, imprime 1, se for false, não imprime nada
        //retorna um valor booleano

        echo array_search('banana', $arrayteste);
        //retorna o indice do item caso ele exista


    ?>
</body>
</html>