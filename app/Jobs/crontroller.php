<?php

/**
 * @job Crontroller
 *
 * Job responsável por iniciar o crontroller e executar suas funções iniciais
 *
 */

 $controllerDoer = require(__DIR__.'/../../bootstrap/job.php');
 $success = $controllerDoer->run();

 echo 'Finalizado';
