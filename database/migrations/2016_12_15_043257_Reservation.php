<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('DB_Reservation', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('id_user')->nullable()->unsigned();
            $table->integer('id_room')->nullable()->unsigned();
            $table->string('event_name');
            $table->date('startdate');
            $table->date('enddate');
            $table->string('proposal')->nullable();
            $table->string('permission_status');
            $table->string('proposal_status');
            $table->string('endstatus');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_room')->references('id')->on('DB_Room');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('DB_Reservation');
    }
}
