<?php

namespace Techbizz\ImdbReader\Commands;

use Illuminate\Console\Command;

class ImdbReaderCommand extends Command
{
    public $signature = 'imdb-reader';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
