<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
         //permet de supprimer les seed eistants
         //a fixer
        User::truncate();

       
     
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $admin=  User::create([ 
            'name'=> 'admin' ,
            'email'=> 'admin@admin.com' ,
            'password' => Hash::make('password') ,
        ]);

        $auteur=  User::create([ 
            'name'=> 'auteur' ,
            'email'=> 'auteur@auteur.com' ,
            'password' => Hash::make('password') ,
        ]);

        $utilisateur=  User::create([ 
            'name'=> 'utilisateur' ,
            'email'=> 'utilisateur@utilisateur.com' ,
            'password' => Hash::make('password') ,
        ]);


     
    }
}
