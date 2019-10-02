<?php
/**
 *
 * interface Sender
 *
 * Interface Sender
 *
 * @author William Costa
 *
 */

namespace App\Models\Crontroller\CrontrollerInterface\Job;

interface Sender{

  /**
   * Método responsável por executar as ações da classe
   * @method run
   * @return boolean
   */
  public function run();

}
