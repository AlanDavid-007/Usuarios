<?php
require __DIR__ . '../../vendor/autoload.php';
//adaptar
define('TITLE', 'Editar Usuário');


use \App\Entity\Usuario;


$obUsuario = new Usuario;

//Validação do ID
if (!isset($_GET['id'])  || !is_numeric($_GET['id'])) {
    header('location: ../Index/index_usuarios.php?status=error');
    exit;
}

//Consulta Vaga
$obUsuario = $obUsuario::getUsuario($_GET['id']);
// echo "<pre>"; print_r($obUsuario); echo "<pre>"; exit;

//Validação da Vaga
if (!$obUsuario instanceof $obUsuario) {
    header('location: ../Index/index_usuarios.php?status=error');
    exit;
}
//Validação do POST
if (isset($_POST['nome'], $_POST['sobrenome'],$_POST['idade'], $_POST['cpf'],$_POST['descricao'],$_POST['sexo'],$_POST['ordem'], $_POST['status'])) {

    $obUsuario->nome = $_POST['nome'];
    $obUsuario->sobrenome = $_POST['sobrenome'];
    $obUsuario->idade = $_POST['idade'];
    $obUsuario->cpf = $_POST['cpf'];
    $obUsuario->descricao = $_POST['descricao'];
    $obUsuario->sexo = $_POST['sexo'];
    $obUsuario->ordem = $_POST['ordem'];
    $obUsuario->status = $_POST['status'];
    $obUsuario->atualizar();
    // echo "<pre>"; print_r($obCurso); echo "</pre>"; exit; 

    header('location: ../Index/index_usuarios.php?status=success');
    exit;
}


require __DIR__ . '../../INCLUDES/header_editar.php';

require __DIR__ . '../../INCLUDES/formulario_usuarios.php';

require __DIR__ . '../../INCLUDES/footer.php';
