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


        Schema::create('types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
           
        });






        Schema::create('echanges', function (Blueprint $table) {
            $table->bigIncrements('id');
          
            $table->text('commentaire');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('type_id');
            $table->timestamps();
        });


        Schema::table('echanges', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('type_id')->references('id')->on('types');
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
             $table->dropIfExists('client_id');
             $table->dropIfExists('type_id');

            Schema::enableForeignKeyConstraints();
        });


        Schema::dropIfExists('echanges');
        Schema::dropIfExists('types');
    }
}
