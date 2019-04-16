<?php

use Illuminate\Database\Seeder;
use App\User;
use App\UserData;
use App\Role;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name','Super Administrador')->first();
        $users = [
            [
                'user' => [
                    'name'=>'Administrador',
                    'last_name'=>'RICSA',
                    'email' => 'admin@ricsa.com',
                    'password' => '12345678',
                    'role_id' => 1,
                ],
            ],
            [
                'user' => [
                    'name'=>'Dirección General',
                    'last_name'=>'RICSA',
                    'email' => 'dg@ricsa.com',
                    'password' => '12345678',
                    'role_id' => 2,
                ],
            ],
            [
                'user' => [
                    'name'=>'Tena',
                    'last_name'=>'RICSA',
                    'email' => 'gerencia@ricsa.com',
                    'password' => '12345678',
                    'role_id' => 3,
                ],
            ],
            [
                'user' => [
                    'name'=>'Cotizacion',
                    'last_name'=>'RICSA',
                    'email' => 'cotizacion@ricsa.com',
                    'password' => '12345678',
                    'role_id' => 4,
                ],
            ],
            [
                'user' => [
                    'name'=>'Ingeniería',
                    'last_name'=>'RICSA',
                    'email' => 'ingenieria@ricsa.com',
                    'password' => '12345678',
                    'role_id' => 4,
                ],
            ],
            [
                'user' => [
                    'name'=>'Almacen',
                    'last_name'=>'RICSA',
                    'email' => 'almacen@ricsa.com',
                    'password' => '12345678',
                    'role_id' => 4,
                ],
            ],
            [
                'user' => [
                    'name'=>'Producción',
                    'last_name'=>'RICSA',
                    'email' => 'produccion@ricsa.com',
                    'password' => '12345678',
                    'role_id' => 4,
                ],
            ],
            [
                'user' => [
                    'name'=>'Contabilidad',
                    'last_name'=>'RICSA',
                    'email' => 'contabilidad@ricsa.com',
                    'password' => '12345678',
                    'role_id' => 5,
                ],
            ],
            [
                'user' => [
                    'name'=>'Compras',
                    'last_name'=>'RICSA',
                    'email' => 'compras@ricsa.com',
                    'password' => '12345678',
                    'role_id' => 6,
                ],
            ],
            [
                'user' => [
                    'name'=>'Cotización',
                    'last_name'=>'RICSA',
                    'email' => 'cotizacion@ricsa.com',
                    'password' => '12345678',
                    'role_id' => 6,
                ],
            ],
            [
                'user' => [
                    'name'=>'Carlos',
                    'last_name'=>'BPM',
                    'email' => 'carlos@bpm.com',
                    'password' => '12345678',
                    'role_id' => 1,
                ],
            ]

        ];
        foreach($users as $user){
            if(App\User::where('email',$user['user']['email'])->count() < 1){
                $user['user']['password'] = bcrypt($user['user']['password']);
                $new_user = App\User::create($user['user']);
            }
        }
    }
}
