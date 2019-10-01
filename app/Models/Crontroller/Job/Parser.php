<?php
/**
 *
 * class Parser
 *
 * Classe responsável por realizar o parse dos arquivos de jobs
 *
 * @author William Costa
 *
 */

 namespace App\Models\Crontroller\Job;

 use \App\Models\Crontroller\CrontrollerInterface\Job\Indexer;

 class Parser implements \App\Models\Crontroller\CrontrollerInterface\Job\Parser{

   /**
    * Instancia de Indexer
    * @var Indexer
    */
   private $indexer = null;

   /**
    * Construtor responsável por definir as instancias necessárias para a execução do Parser
    * @method __construct
    * @param  Indexer    $indexer
    */
   public function __construct(Indexer $indexer){
     $this->indexer = $indexer;
   }


 }
