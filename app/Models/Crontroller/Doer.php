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

 namespace App\Models\Crontroller;

 class Doer{

   /**
    * Método responsável por chamar as classes e métodos de executação de jobs
    * @method run
    * @return boolean
    */
   public function run(){
     return true;
   }

 }
