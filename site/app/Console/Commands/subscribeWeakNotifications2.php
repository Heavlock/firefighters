<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class subscribeWeakNotifications2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:subscribeWeakNotifications2';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
      $admins = \App\Models\User::GetAdmins();
    }
}
