<?php

/**
 * @job Crontroller
 *
 * Job responsável por iniciar o crontroller e executar suas funções iniciais
 *
 */

 $controller = require(__DIR__.'/../../bootstrap/job.php');
 $success = $controller->run();

 echo 'Finalizado';
