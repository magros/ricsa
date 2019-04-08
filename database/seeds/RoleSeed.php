<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Super Administrador',
            'Encargado'
        ];
        foreach($roles as $role){
            Role::firstOrCreate(['name'=>$role]);
        }
    }
}
