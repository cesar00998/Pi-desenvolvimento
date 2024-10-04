<?php
//echo 'teste ok';


$usuarios_autenticado = false;
$usuarios_app = array(
    array('email' => 'cessar.sekito@icloud.com', 'senha' =>'1234'),
    array('email' => 'user@teste.com.br', 'senha' =>'abcd')
);


foreach($usuarios_app as $user){
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'] ){
        $usuarios_autenticado = true;
    }
};

if($usuarios_autenticado){
    echo 'usuario autenticado com sucesso';
}else{
   // echo 'ERRO de autentificação';

   header('Location: index.php?login=erro');
}

 ?>