<?php
/**
 *
 * interface Analyzer
 *
 * Interface analyzer
 *
 * @author William Costa
 *
 */

namespace App\Models\Crontroller\CrontrollerInterface\Job;

interface Analyzer{

  /**
   * Método responsável por definir as instancias necessárias para a execução do analyzer
   * @method __construct
   * @param  Parser      $parser
   * @param  Sender      $sender
   */
  public function __construct(Parser $parser,Sender $sender);

  /**
   * Método responsável por executar as ações da classe
   * @method run
   * @return boolean
   */
  public function run();

}
