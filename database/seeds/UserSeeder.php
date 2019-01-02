<?php

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
        //
        $luky = Hash::make('LRTegalan2');
        $rendy = Hash::make('085607499007');
        $nestya = Hash::make('surodakan2');
        $data = array(
            array(
                'name' => 'Luky Rahman',
                'email' => 'lukyrahman68@gmail.com',
                'password' => $luky,
            ),
            array(
                'name' => 'Rendy Destara Firmanto',
                'email' => 'rendydestara@gmail.com',
                'password' => $rendy,
            ),
            array(
                'name' => 'Nestya Arum Damayanti',
                'email' => 'nestyadamayanti@gmail.com',
                'password' => $nestya,
            ),
        );
        DB::table('users')->insert($data);
    }
}
