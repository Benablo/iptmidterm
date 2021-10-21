<?php

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
        $data = [
            [
                'lname'=>'Benablo',
                'fname'=>'Mark Dwin',
                'address'=>'Centro, Tubigon Bohol',
                'phone'=>'0948.536.4567',
                'email'=>'benablomarkdwin@yahoo.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Mendez',
                'fname'=>'Maky',
                'address'=>'Ubojan, Tubigon Bohol',
                'phone'=>'0967.234.4447',
                'email'=>'mendezmaky@yahoo.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'James',
                'fname'=>'Lebron',
                'address'=>'Potohan, Tubigon Bohol',
                'phone'=>'0998.789.1986',
                'email'=>'lebronjames@yahoo.com',
                'password'=>bcrypt('password123')
            ],
        ];

        foreach($data as $usr) {
            \App\User::create($usr);
        }
    }
}
