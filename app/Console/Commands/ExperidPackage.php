<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\DB;
use App\Models\wallet;
use App\Models\User_Package;
use App\Models\Package_Commissons;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ExperidPackage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ExperidPackage:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ExperidPackage states change';

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
        $experid_packages = DB::table('user__packages')
        ->whereColumn('package_max_revenue','=','total')
        ->get();
        foreach ($experid_packages as $experid_package){
            DB::table('user__packages')
            ->where('id', $experid_package->id)
            ->update(['current_status' =>2]);
        }
          
      }
}
