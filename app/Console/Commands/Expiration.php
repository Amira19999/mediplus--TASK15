<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use APP\Model\doctor;
class Expiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'doctor:expiration';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::Where('expired',0)->get();
        foreach($users as $user){
            $user->update(['expried'=>1]);
        }
    }
}
