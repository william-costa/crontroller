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

 }
