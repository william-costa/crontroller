<?php
/**
 *
 * class Doer
 *
 * Classe responsável por iniciar as rotinas de execução de jobs
 *
 * @author William Costa
 *
 */

 namespace App\Models\Crontroller\Job;

 use \App\Models\Crontroller\CrontrollerInterface\Job\Analyzer;

 class Doer implements \App\Models\Crontroller\CrontrollerInterface\Job\Doer{

   /**
    * Instancia de Analyzer
    * @var Analyzer
    */
   private $analyzer = null;

   /**
    * Construtor responsável por definir as instancias necessárias para a execução do Doer
    * @method __construct
    * @param  Analyzer    $analizer
    */
   public function __construct(Analyzer $analyzer){
     $this->analyzer = $analyzer;
   }

   /**
    * Método responsável por executar o analyzer
    * @method run
    * @return boolean
    */
   public function run(){
     return $this->analyzer->run();
   }

 }
