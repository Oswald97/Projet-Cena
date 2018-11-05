<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentreVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centre_votes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_centre');
            $table->unsignedInteger('arrondissement_id');
            $table->timestamps();

            $table->foreign('arrondissement_id')
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
        Schema::dropIfExists('centre_votes');
    }
}
