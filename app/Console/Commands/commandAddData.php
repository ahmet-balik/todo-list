<?php

namespace App\Console\Commands;

use App\Support\MyFacade;
use Illuminate\Console\Command;

class commandAddData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'provider:todo {endpoint}';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Todo api get save';

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
     * @return int
     */
    public function handle()
    {

        $endpoint = $this->argument('endpoint');
        MyFacade::getTodo($endpoint);
    }
}
