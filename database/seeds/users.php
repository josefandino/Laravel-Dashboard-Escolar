<?php

use App\User;
use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        User::truncate();

        $data = [];

        array_push($data, [
            'name'     => 'Superadmin',
            'last_name'     => 'Pedroza',
            'email'    => 'superadmin@mail.com',
            'password' => bcrypt('123456'),
            'role'     => 5,
            'active'     => 1,
            'avatar'   => 'admin.png',
            'DNI'   => '89076534',
            'address'   => 'Lima',
            'phone'   => '+51 971 888 294',
            'birthday'   => '1985/12/24',
        ]);

        array_push($data, [
            'name'     => 'user',
            'last_name' => 'Madero',
            'email'    => 'user@mail.com',
            'password' => bcrypt('123456'),
            'role'     => 0,
            'active'     => 1,
            'avatar'   => 'user.png',
            'DNI'   => '890745534',
            'address'   => 'Bogota',
            'phone'   => '51971 888 294',
            'birthday'   => '1981/10/27',
        ]);

        User::insert($data);
    }
}


            