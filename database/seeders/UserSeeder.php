<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $in['name'] = 'Faisol Lutfi';
        $in['email'] = 'admin@gmail.com';
        $in['password'] = bcrypt('password');
        $in['address'] = 'Kediri';
        $in['phone'] = '081803366228';
        $in['role'] = '2';
        User::create($in);
    }
}
