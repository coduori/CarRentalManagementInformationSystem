<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('licence_plate');
            $table->foreign('licence_plate')->references('licence_plate')->on('vehicle_description')->onUpdate('cascade'); 
            $table->date('date');
            $table->integer('current_mileage');
            $table->integer('next_service_mileage');
            $table->integer('cost');
            $table->text('comments')->nullable();
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_records');
    }
}
