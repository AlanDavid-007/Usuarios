<?php

require __DIR__ . '../../vendor/autoload.php';

define('TITLE', 'Cadastro de Usuários');
define('HREF', '../Cadastrar/cadastrar_usuarios.php');
define('BUTTONTEXT', 'Cadastrar Usuário');

use \App\Entity\Usuario;

//busca
$busca = filter_input(INPUT_GET, 'busca');

//Filtro status
$FiltroCPF = filter_input(INPUT_GET, 'cpf');


//condiçoes sql 
$condicoes = [
   strlen($busca) ? 'cpf LIKE "%'.str_replace (' ','%',$busca).'%"' : null, 
];

$condicoes = array_filter($condicoes);

 //clausula where
$where = implode(' AND ',$condicoes);

$usuarios = Usuario::getUsuarios($where);

// echo "<pre>"; print_r($Noticias); echo "</pre>"; exit;

require __DIR__ . '../../INCLUDES/header.php';

require __DIR__ . '../../INCLUDES/listagem_usuarios.php';

require __DIR__ . '../../INCLUDES/footer.php';
?>