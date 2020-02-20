<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesForPlayersAndTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('team_name');
            $table->string('team_logo');
            $table->timestamps();
        });

        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('height');
            $table->integer('weight');
            $table->integer('jersey_number');
            $table->string('player_position');
            $table->timestamps();
        });

        Schema::create('players_teams', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('player_id');
            $table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');

            $table->bigInteger('team_id');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');

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
        Schema::dropIfExists('players_teams');
        Schema::dropIfExists('players');
        Schema::dropIfExists('teams');
    }
}
