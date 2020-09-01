<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::firstOrCreate(['name' => 'company1']);
        Company::firstOrCreate(['name' => 'company2']);
        Company::firstOrCreate(['name' => 'company3']);
        Company::firstOrCreate(['name' => 'company4']);
    }
}
