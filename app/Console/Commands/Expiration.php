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
        $doctor = Doctor::Where('expired',0)->get();
        foreach($Doctor as $doctor){
            $doctor->update(['expried'=>1]);
        }
    }
}
