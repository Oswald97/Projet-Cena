<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrondissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrondissements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_arrondissement');
            $table->unsignedInteger('commune_id');
            $table->timestamps();

            $table->foreign('commune_id')
                  ->references('id')
                  ->on('communes')
                  ->onUpdate('restrict')
                  ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arrondissements');

    }
}
