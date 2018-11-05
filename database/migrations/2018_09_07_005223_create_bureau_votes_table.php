<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBureauVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bureau_votes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero');
            $table->unsignedInteger('centre_vote_id');
            $table->timestamps();

            $table->foreign('centre_vote_id')
                  ->references('id')
                  ->on('centre_votes')
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
        Schema::dropIfExists('bureau_votes');
    }
}
