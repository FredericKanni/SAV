<?php

use App\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
      
       Client::truncate();

       DB::statement('SET FOREIGN_KEY_CHECKS=1;');


       $fred=  Client::create([ 
        'nom'=> 'fred' ,
        'prenom'=> 'kanni' ,
        'tel' => '0693901886',
        'mail'=> 'fred@fred.com' ,
    ]);

    $fredo=  Client::create([ 
        'nom'=> 'fredo' ,
        'prenom'=> 'kanno' ,
        'tel' => '0693000000',
        'mail'=> 'fredo@fredo.com' ,
    ]);

    $fredy=  Client::create([ 
        'nom'=> 'fredy' ,
        'prenom'=> 'kanniii' ,
        'tel' => '0693999999',
        'mail'=> 'fredy@fredy.com' ,
    ]);

    }
}
