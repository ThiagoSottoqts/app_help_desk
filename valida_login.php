<?php

    session_start();

    

    //variável que verifica se a autenticação foi realizada
    $usuario_autenticado = false; //

    //usuários do sistema
    $usuarios_app = [
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
    ];

    /* para verificar se o array estava funcionando
    echo '<pre>';
    print_r($usuarios_app);
    echo '<pre />';*/

    foreach($usuarios_app as $user) {  //forech percorre cada um dos elementos e os as nos da acesso a cada um dos valores dos arrays de forma individual
       if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
       }
    }

    if($usuario_autenticado) {
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';// logica para ir para outras paginas
    } else {
        $_SESSION['autenticado'] = 'Não';
        header('Location: index.php?login=erro');// essa função força o redirecionamento.
    }


    /* super global get com essa as informações de email e senha aparecem no browse - capturar dados do formulário de acesso
    print_r($_GET);

    echo '<br />';

    echo $_GET['email'];
    echo '<br />';
    echo $_GET['senha'];

    print_r($_POST);

    echo '<br />';*/

    $_POST['email'];
    echo '<br />';
    $_POST['senha'];


?>