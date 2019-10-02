<?php
/**
 *
 * class Analyzer
 *
 * Classe responsável pela analise de arquivos de jobs
 *
 * @author William Costa
 *
 */

 namespace App\Models\Crontroller\Job;

 use \App\Models\Crontroller\CrontrollerInterface\Job\Parser;
 use \App\Models\Crontroller\CrontrollerInterface\Job\Sender;

 class Analyzer implements \App\Models\Crontroller\CrontrollerInterface\Job\Analyzer{

   /**
    * Instancia de Parser
    * @var Parser
    */
   private $parser = null;

   /**
    * Instancia de Sender
    * @var Sender
    */
   private $sender = null;

   /**
    * Método responsável por definir as instancias necessárias para a execução do analyzer
    * @method __construct
    * @param  Parser      $parser
    * @param  Sender      $sender
    */
   public function __construct(Parser $parser,Sender $sender){
     $this->parser = $parser;
     $this->sender = $sender;
   }

   /**
    * Método responsável por verificar se existem alterações nos jobs
    * @method checkForUpdates
    * @return boolean
    */
   private function checkForUpdates(){
     return false;
   }

   /**
    * Método responsável por executar as ações do analyzer
    * @method run
    * @return boolean
    */
   public function run(){
     return !$this->checkForUpdates() ? $this->sender->run() : $this->parser->run($this);
   }

 }
