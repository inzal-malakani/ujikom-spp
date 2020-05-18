<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->username = "inzal";
        $administrator->name = "Inzal Malakani";
        $administrator->email = "inzalmalakani.026@gmail.com";
        $administrator->level = json_encode(["ADMIN"]);
        $administrator->password = Hash::make('12345678');

        $administrator->save();

        $this->command->info("User Admin berhasil di insert");
    }
}