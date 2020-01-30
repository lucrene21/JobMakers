<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            'label' => 'Employer',
            'code' => config('jobmaker.codes.role.employer'),
            'created_at' => \Illuminate\Support\Carbon::now()
        ]);
        DB::table('role')->insert([
            'label' => 'Administrator',
            'code' => config('jobmaker.codes.role.admin'),
            'created_at' => \Illuminate\Support\Carbon::now()
        ]);
        DB::table('role')->insert([
            'label' => 'Worker',
            'code' => config('jobmaker.codes.role.worker'),
            'created_at' => \Illuminate\Support\Carbon::now()
        ]);
    }
}
