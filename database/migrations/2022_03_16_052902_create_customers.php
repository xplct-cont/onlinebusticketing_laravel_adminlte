<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('operator', 255);
            $table->string('bus_name', 255);
            $table->string('point_of_origin', 255);
            $table->string('start_time');
            $table->string('destination', 255);
            $table->string('drop_time');
            $table->bigInteger('ticket_no')->unsigned();
            $table->string('passenger_name', 255);
            $table->integer('age');
            $table->bigInteger('contact_no')->unsigned();
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
        Schema::dropIfExists('bookings');
    }
}
