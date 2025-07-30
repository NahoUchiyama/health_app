<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
        'name' => '管理者一号',
        'kana' => 'カンリシャイチゴウ',
        'email' => 'admin@example.com',
        'password' => Hash::make('adminpass'),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
    }
}
