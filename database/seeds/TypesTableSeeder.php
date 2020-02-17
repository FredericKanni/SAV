<?php

use App\Type;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
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
       Type::truncate();

      
    
       DB::statement('SET FOREIGN_KEY_CHECKS=1;');

       Type::create([ 
           'type'=> 'tel' ,
          
       ]);

        Type::create([ 
           'type'=> 'mail' ,
          
       ]);
    }
}
