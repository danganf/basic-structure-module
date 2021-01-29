<?php

namespace SDKBlank\Console;

use Carbon\Carbon;

/**
 * Class OrderIntegrationCommand
 * @package SDKBlank\Console
 */
class BasicCommand extends Command
{
    protected $name        = 'SDKBlank:console-name';
    protected $description = 'Description';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Init cron ' . $this->name);
    }

}
