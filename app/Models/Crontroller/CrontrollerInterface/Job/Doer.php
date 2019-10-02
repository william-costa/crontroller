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
   * Construtor responsável por definir as instancias necessárias para a execução do Doer
   * @method __construct
   * @param  Analyzer    $analizer
   */
  public function __construct(Analyzer $analyzer);

  /**
   * Método responsável por executar as ações da classe
   * @method run
   * @return boolean
   */
  public function run();

}
