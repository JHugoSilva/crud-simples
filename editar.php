<?php
require __DIR__.'/vendor/autoload.php';
define('TITLE', 'Editar Vaga');

use \App\Entity\Vaga;

if (!isset($_GET['id']) OR !is_numeric($_GET['id'])) {
    header('location:index.php?status=error');
    exit;
}
$objVaga = Vaga::getVaga($_GET['id']);

if (!$objVaga instanceof Vaga) {
    header('location:index.php?status=error');
    exit;
}

if (isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])) {
    
    $objVaga->titulo = $_POST['titulo'];
    $objVaga->descricao = $_POST['descricao'];
    $objVaga->ativo = $_POST['ativo'];
    $objVaga->atualizar();
    header("Location:index.php?status=success");
    exit;
}
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';