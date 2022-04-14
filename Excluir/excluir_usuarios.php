<?php
//adaptar
require __DIR__ . '../../vendor/autoload.php';

define('TITLE', 'Cadastrar Usuários');
define('HREF2', '../Index/index_usuarios.php');
define('TEXT', 'Curso');

use \App\Entity\Usuario;

//Validação do ID
if (!isset($_GET['id'])  || !is_numeric($_GET['id'])) {
    header('location: ../Index/index_usuarios.php?status=error');
    exit;
}

//Consulta Curso
$obUsuario = Usuario::getUsuario($_GET['id']);
// echo "<pre>"; print_r($obUsuario); echo "<pre>"; exit;

//Validação da Usuario
if (!$obUsuario instanceof Usuario) {
    header('location: ../Index/index_usuarios.php?status=error');
    exit;
}
//Validação do POST
if (isset($_POST['excluir'])) {

    $obUsuario->excluir();

    header('location: ../Index/index_usuarios.php?status=success');
    exit;
}

require __DIR__ . '../../INCLUDES/header_editar.php';
require __DIR__ . '../../INCLUDES/confirmarExclusao_usuarios.php';
require __DIR__ . '../../INCLUDES/footer.php';
