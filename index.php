<?php
require __DIR__.'/vendor/autoload.php';
use \App\Entity\Vaga;
$vagas = Vaga::getVagas('1=1', 'id DESC', 5);

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';