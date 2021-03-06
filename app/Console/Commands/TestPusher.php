<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestPusher extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:sendPusher';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '测试发送Push';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        event(new \App\Events\TestPusher());
    }
}
