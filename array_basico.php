<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- comnentario-->
    <?php
      //sequenciais
      $lista_teste = array('Gian', 18, true, 17.90);

      // funcoes utilizadas para debug: 

      var_dump($lista_teste);
      //retorna array(4) { [0]=> string(4) "Gian" [1]=> int(18) [2]=> bool(true) [3]=> float(17.9) }
      echo '<br/>';
      print_r($lista_teste);
      //retorna Array ( [0] => Gian [1] => 18 [2] => 1 [3] => 17.9 )

      $lista_teste[] = 'novo item';
      var_dump($lista_teste);

      echo '<br/>';

      $novo_array = ['a' => 'primento teste', 'b' => 'segundo teste'];
      var_dump($novo_array);

      
    ?>    
</body>
</html>