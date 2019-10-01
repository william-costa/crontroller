<?php

require_once __DIR__.'/../vendor/autoload.php';

 $indexer  = new \App\Models\Crontroller\Job\Indexer;

 $parser   = new \App\Models\Crontroller\Job\Parser($indexer);

 $sender   = new \App\Models\Crontroller\Job\Sender;

 $analyzer = new \App\Models\Crontroller\Job\Analyzer($parser,$sender);

 return new \App\Models\Crontroller\Job\Doer($analyzer);
