<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = new User;
        $u->name = "Administrador";
        $u->email = "admin@gmail.com";
        $u->password = bcrypt("admin123");
        $u->save();

        $u = new User;
        $u->name = "Cliente";
        $u->email = "cliente@gmail.com";
        $u->password = bcrypt("cliente123");
        $u->save();
        
    }
}
