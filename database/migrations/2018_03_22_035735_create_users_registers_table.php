<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_registers', function (Blueprint $table) {
            $table->increments('user_register_id');
            $table->unsignedInteger('user_register_user_id');
            $table->foreign('user_register_user_id')->references('user_id')->on('users_infoins');
            $table->unsignedInteger('user_register_event_id');
            $table->foreign('user_register_event_id')->references('event_id')->on('events');
            $table->dateTime('user_register_date');
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
        Schema::dropIfExists('users_registers');
    }
}
