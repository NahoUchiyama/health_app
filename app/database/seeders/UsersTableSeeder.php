<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        'name' => 'テスト太郎',
        'kana' => 'テストタロウ',
        'email' => 'test@example.com',
        'password' => Hash::make('password123'),
        'birthday' => '1990-01-01',
        'gender' => 'male',
        'height' => 170.5,
        'weight' => 65.3,
        'menstruation_use' => 0,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
    }
}
