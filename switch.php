<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num = 1;
        switch($num){
            case $num >2:
                echo 'teste';
                break;
            default:
            echo 'nenhuma das opcoes';
            break;
        }
        echo gettype($num);

        
    ?>
    
    <label for="name">Name:</label> <input type="text" id="name" name="user_name">
</body>
</html>