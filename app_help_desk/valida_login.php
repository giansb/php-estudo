<?php

session_start();
$_SESSION['usuario'] = 'novo valor';
print_r($_SESSION);

$usuario_aut = false;
$usuarios_app = [
    ['email' => 'adm@teste.com', 'senha' => '123456'],
    ['email' => 'user@teste.com', 'senha' => 'abcd'],
];
    

    foreach($usuarios_app as $item){

            if($item['email'] == $_POST['email'] && $item['senha'] == $_POST['senha']){
                $usuario_aut = true;
                
            };
    };
   

    if($usuario_aut){
        echo 'logado';
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');
    } else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    };
?>