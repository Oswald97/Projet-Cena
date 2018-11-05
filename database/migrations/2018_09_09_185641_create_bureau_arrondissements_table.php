<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBureauArrondissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bureau_arrondissements', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_arrondissement');

            $table->foreign('id_arrondissement')
                  ->references('id')
                  ->on('arrondissements')
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
        Schema::dropIfExists('bureau_arrondissements');
    }
}
