<?php
/**
 *
 * class Sender
 *
 * Classe responsável por enviar os comandos para execução
 *
 * @author William Costa
 *
 */

 namespace App\Models\Crontroller\Job;

 class Sender implements \App\Models\Crontroller\CrontrollerInterface\Job\Sender{

   /**
    * Método responsável por executar os comandos
    * @method run
    * @return boolean
    */
   public function run(){
     return true;
   }
   
 }
