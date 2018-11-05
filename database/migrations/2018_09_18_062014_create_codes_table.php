<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',15)->unique();
            $table->string('email',120)->unique();
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('arrondissement_id')->nullable();
            $table->unsignedInteger('centre_vote_id')->nullable();
            $table->unsignedInteger('bureau_vote_id')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codes');
    }
}
