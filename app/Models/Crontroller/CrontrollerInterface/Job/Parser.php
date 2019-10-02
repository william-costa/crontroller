<?php
/**
 *
 * interface Parser
 *
 * Interface Parser
 *
 * @author William Costa
 *
 */

namespace App\Models\Crontroller\CrontrollerInterface\Job;

interface Parser{

  /**
   * Construtor responsável por definir as instancias necessárias para a execução do Parser
   * @method __construct
   * @param  Indexer    $indexer
   */
  public function __construct(Indexer $indexer);

  /**
   * Método responsável por executar as ações da classe
   * @method run
   * @param  Analyzer    $analyzer
   * @return boolean
   */
  public function run(Analyzer $analyzer);

}
