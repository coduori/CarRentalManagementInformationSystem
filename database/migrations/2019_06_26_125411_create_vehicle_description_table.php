<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_description', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('chasis_number')->unique()->index();
            $table->string('licence_plate')->unique()->index();
            $table->string('model');
            $table->string('transmission');
            $table->string('image');
            $table->integer('lease_price');
            $table->text('special_features');
            $table->integer('added_by');
            $table->foreign('added_by')->references('employee_id')->on('users')->onUpdate('cascade')->onDelete('cascade'); 
            $table->string('status');
            $table->timestampsTz();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_description');
    }
}
