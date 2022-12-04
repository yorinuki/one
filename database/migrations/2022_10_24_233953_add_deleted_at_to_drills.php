<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeletedAtToDrills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drills', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drills', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('country_id');
          $table->integer('continents_id');
          $table->integer('difficulty_id');
          $table->string('img');
          $table->string('area_name');
          $table->timestamps();
        });
    }
}
