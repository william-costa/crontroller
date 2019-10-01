<?php
/**
 *
 * class Doer
 *
 * Classe responsável pela executação de jobs
 *
 * @author William Costa
 *
 */

 namespace App\Models\Crontroller\Job;

 class Doer extends \App\Models\Crontroller\Crontroller{

   /**
    * Método responsável por chamar as classes e métodos de executação de jobs
    * @method run
    * @return boolean
    */
   public function run(){
     return true;
   }

 }
