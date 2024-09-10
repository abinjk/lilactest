<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = DB::table('departments')->pluck('id')->toArray();
        $designations = DB::table('designations')->pluck('id')->toArray();

        foreach (range(1, 10) as $index) {
            DB::table('users')->insert([
                'name' => 'User ' . $index,
                'email' => 'user' . $index . '@' . Str::random(5) . '.com',
                'password' => Hash::make('password'),
                'fk_department' => $departments[array_rand($departments)],
                'fk_designation' => $designations[array_rand($designations)],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
