<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super                      = new User();
        $super->name                = 'Super Admin';
        $super->email               = 'super@gmail.com';
        $super->email_verified_at   = date("Y-m-d H:i:s");
        $super->password            = bcrypt('12345678');
        $super->created_at          = date("Y-m-d H:i:s");
        $super->save();
    }
}
