<?php

session_start();
//$_SESSION['usuario'] = 'novo valor';
//print_r($_SESSION);

$usuario_aut = false;
$usuario_id = null;
$usuario_perfil_id = null;


$perfis = [1 => 'administrativo', 2 => 'usuario'];
$usuarios_app = [
    ['id' => 1, 'email' => 'adm1@teste.com', 'senha' => '123456', 'perfil_id' => 1],
    ['id' => 2, 'email' => 'adm2@teste.com', 'senha' => '123456', 'perfil_id' => 1],
    ['id' => 3, 'email' => 'user1@teste.com', 'senha' => 'abcd', 'perfil_id' => 2],
    ['id' => 4, 'email' => 'user2@teste.com', 'senha' => 'abcd', 'perfil_id' => 2],
];
    

    foreach($usuarios_app as $item){

            if($item['email'] == $_POST['email'] && $item['senha'] == $_POST['senha']){
                $usuario_aut = true;
                $usuario_id = $item['id'];
                $usuario_perfil_id = $item['perfil_id'];

                
            };
    };
   

    if($usuario_aut){
        echo 'logado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;

        header('Location: home.php');
    } else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    };
?>