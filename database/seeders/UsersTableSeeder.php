<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => '無料会員',
                'kana' => 'ムリョウカイイン',
                'email' => 'muryou@example.com',
                'email_verified_at' => now(), // 認証済み
                'password' => Hash::make('muryou'),
                'postal_code' => '4600000',
                'address' => 'muryou@example.com',
                'phone_number' => '09000000001',
                'birthday' => '1990-01-01',
                'occupation' => 'テスト',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '有料会員',
                'kana' => 'ユウリョウカイイン',
                'email' => 'yuuryou@example.com',
                'email_verified_at' => now(), // 認証済み
                'password' => Hash::make('yuuryou'),
                'postal_code' => '4600000',
                'address' => 'yuuryou@example.com',
                'phone_number' => '09000000002',
                'birthday' => '1992-02-02',
                'occupation' => 'テスト',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
