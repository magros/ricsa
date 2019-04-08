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
                    'name'=>'Kevin',
                    'last_name'=>'Jimenez',
                    'email' => 'kevin@inweb.mx',
                    'password' => '12345678',
                    'role_id' => $role->id
                ]
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
