<?php
/**
 *
 * interface Doer
 *
 * Interface Doer
 *
 * @author William Costa
 *
 */

namespace App\Models\Crontroller\CrontrollerInterface\Job;

interface Doer{

  /**
   * Método responsável por chamar as classes e métodos de execução de jobs
   * @method run
   * @return boolean
   */
  public function run();

}
