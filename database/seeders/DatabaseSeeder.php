<?php

namespace Database\Seeders;

use App\Models\Loans\LoansAccountModel;
use App\Models\Meetings\AttendanceModel;
use App\Models\Meetings\HostsModel;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        LoansAccountModel::factory(100)->create();
    }
}
