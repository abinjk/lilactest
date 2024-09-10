<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DesignationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $designations = ['Junior Developer', 'Senior Developer', 'Manager', 'Team Lead', 'Intern'];

        foreach ($designations as $designation) {
            DB::table('designations')->insert([
                'name' => $designation,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
