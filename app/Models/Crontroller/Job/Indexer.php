<?php
/**
 *
 * class Indexer
 *
 * Classe responsável por indexar os jobs
 *
 * @author William Costa
 *
 */

 namespace App\Models\Crontroller\Job;

 use \App\Models\Crontroller\CrontrollerInterface\Job\Parser;

 class Indexer implements \App\Models\Crontroller\CrontrollerInterface\Job\Indexer{

   /**
    * Método responsável por executar o indexer
    * @method run
    * @param  Parser    $parser
    * @return boolean
    */
   public function run(Parser $parser){

   }

 }
