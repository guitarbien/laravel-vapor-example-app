<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:me';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'testing command';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        \Log::info('command done');
    }
}
