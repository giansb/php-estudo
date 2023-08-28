<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $itens = ['sofa', 'cadeira', 'livro',  'mesa'];

        echo '<pre>';
        print_r($itens);
        echo '</pre>';


        foreach($itens as $item){
            echo "$item <br>";
        }
    ?>
</body>
</html>