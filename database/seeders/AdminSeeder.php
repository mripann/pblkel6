<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Adit Hidayatullah',
            'email' => 'fajarrosyidi80@gmail.com',
            'password' => Hash::make('fajarrs2020'),
        ]);
    }
}
