<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('event_id');
            $table->unsignedInteger('event_organizer_id');
            $table->foreign('event_organizer_id')->references('organizer_id')->on('organizers');
            $table->unsignedInteger('event_category_id');
            $table->foreign('event_category_id')->references('category_id')->on('categories');
            $table->string('event_name', 150);
            $table->string('event_address',255);
            $table->date('event_date');
            $table->time('event_time');
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
        Schema::dropIfExists('events');
    }
}
