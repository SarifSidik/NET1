<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRewardsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rewards', function (Blueprint $table) {
            $table->increments('id_reward');
            $table->integer('msisdn')->nullable();
            $table->integer('point_reward')->nullable();
            $table->date('last_update')->nullable();
            $table->string('user')->nullable();
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
        Schema::drop('Rewards');
    }
}
