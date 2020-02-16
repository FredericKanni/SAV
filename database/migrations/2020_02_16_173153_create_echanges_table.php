<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('echanges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->text('commentaire');

            $table->unsignedBigInteger('user_id');
        
            $table->timestamps();
        });


        Schema::table('echanges', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    
    {


        Schema::table('echanges', function (Blueprint $table) {
             Schema::disableForeignKeyConstraints();
            // $table->dropForeign(['user_id']);
             $table->dropIfExists('user_id');

           

            Schema::enableForeignKeyConstraints();
        });


        Schema::dropIfExists('echanges');
    }
}
