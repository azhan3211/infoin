<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizers', function (Blueprint $table) {
            $table->increments('organizer_id');
            $table->string('organizer_name', 100);
            $table->string('organizer_password', 100);
            $table->string('organizer_email', 100);
            $table->string('organizer_phone', 13);
            $table->unsignedInteger('organizer_institution_id');
            $table->foreign('organizer_institution_id')->references('institution_id')->on('institutions');
            $table->char('organizer_status', 1)->default('T');

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
        Schema::dropIfExists('organizers');
    }
}
