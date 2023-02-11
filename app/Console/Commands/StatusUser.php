<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class StatusUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'status user every week un active order ';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::where('status', '0')->get();
        foreach ($users as $user) {
           $user->delete();

        }


       return 0;
    }
}
