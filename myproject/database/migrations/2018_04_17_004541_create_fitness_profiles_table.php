<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFitnessProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fitness_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('weight');
            //$table->string('height');
            $table->string('bloodType');
            $table->string('gender');

            #$table->integer('calories');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fitness_profiles');
    }
}
