<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultats', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('bureauVote_id');
            $table->unsignedInteger('partie_id');
            $table->bigInteger('voix')->nullable();
            $table->timestamps();

            $table->foreign('bureauVote_id')
                  ->references('id')
                  ->on('bureau_votes')
                  ->onUpdate('restrict')
                  ->onDelete('restrict');

            $table->foreign('partie_id')
                  ->references('id')
                  ->on('parties')
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
        Schema::dropIfExists('resultats');
    }
}
