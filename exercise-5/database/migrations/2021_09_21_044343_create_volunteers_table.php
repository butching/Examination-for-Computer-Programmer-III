<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->increments('VolunteerId');
            $table->string('FirstName');
            $table->string('LastName');
            $table->integer('Age',false,true);
            $table->dateTime('BirthDate');
            $table->unsignedInteger('sex_id');
            $table->string('region_code');
            $table->timestamps();

            $table->foreign('sex_id')->references('sex_id')->on('lib_sex');
            $table->foreign('region_code')->references('region_code')->on('lib_regions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volunteers');
    }
}
