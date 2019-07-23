<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use Illuminate\Support\Carbon;

class RentalPenalty extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'penalize:client';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'checks for late returns and penalize a client';

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
        $data= \DB::table('request_records')
                ->select('id','cost','lease_end')
                ->whereRaw('status ="Approved" and lease_end < CURDATE()')
                ->get();
                foreach ($data as $data ) {
                    $_=Carbon::parse($data->lease_end);
                    $_1=Carbon::parse(Carbon::now());
                    $date_diff=$_->diffInMinutes($_1);
                    $penalty = $date_diff*5;
                    $feed=DB::table('request_records')->where('id',$data->id)->update(['penalty'=>$penalty]);
                  }
       
    }
}

                        