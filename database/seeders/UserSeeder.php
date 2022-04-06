<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin =  [
            'name' => 'Phạm Quang Linh',
            'role'=>'0',
            'email'=>'phamquanglinhdev@gmail.com',
            'password'=>Hash::make('Linhz123@'),
        ];
        User::create($admin);
    }
}
