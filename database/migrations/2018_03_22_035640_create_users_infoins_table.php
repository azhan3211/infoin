<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersInfoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_infoins', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_fullname',50);
            $table->string('user_email',100);
            $table->string('username',50);
            $table->string('user_password',50);
            $table->string('user_address',150)->nullable(true);
            $table->string('user_phone',13);
            $table->unsignedInteger('user_institution_id')->nullable(true);
            $table->foreign('user_institution_id')->references('institution_id')->on('institutions');
            $table->char('user_status',1)->default('T');
            $table->date('user_date_of_birth')->nullable(true);
            $table->string('user_city',100)->nullable(true);
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
        Schema::dropIfExists('users_infoins');
    }
}
