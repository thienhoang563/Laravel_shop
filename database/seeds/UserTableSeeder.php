<?php

use Illuminate\Database\Seeder;
use App\User

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->id = 1;
        $user->name = "admin";
        $user->email =  "admin@gmail.com";
        $user->password = bcrypt("12345678");
        $user->address = "HaNoi";
        $user->phone = "0999999999";
        $user->image = "";
        $user->role = \App\Http\Controllers\RoleConstant::ADMIN;
        $user->save();
    }
}
