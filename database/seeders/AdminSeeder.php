<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'id'=>3,
            'email' => 'sunardi@bps.go.id',
            'password' => Hash::make('12345'),
        ]);
        DB::table('opd')->insert([
            'id'=>3,
            'email' => 'sunardi@bps.go.id',
            'password' => Hash::make('12345'),
        ]);
    }
}
