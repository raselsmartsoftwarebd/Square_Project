<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminManageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = new User();
        $users->name = 'admin';
        $users->email = 'admin@email.com';
        $users->is_admin = '1';
        $users->password = '12345678';
        $users->save();
    }
}
