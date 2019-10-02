<?php
/**
 *
 * interface Indexer
 *
 * Interface Indexer
 *
 * @author William Costa
 *
 */

namespace App\Models\Crontroller\CrontrollerInterface\Job;

interface Indexer{

  /**
   * Método responsável por executar as ações da classe
   * @method run
   * @param  Parser    $parser
   * @return boolean
   */
  public function run(Parser $parser);

}
