<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('licence_plate');
            $table->foreign('licence_plate')->references('licence_plate')->on('vehicle_description')->onUpdate('cascade'); 
            $table->string('surname');
            $table->foreign('surname')->references('surname')->on('ntsa_records')->onUpdate('cascade');
            $table->integer('licence_number');
            $table->foreign('licence_number')->references('licence_number')->on('users')->onUpdate('cascade'); 
            $table->date('lease_start');
            $table->date('lease_end');
            $table->integer('cost');
            $table->integer('penalty')->default(0)->nullable();
            $table->integer('approved_by')->nullable();
            $table->String('status');
            $table->String('feedback')->default('no feedback.')->nullable();
            $table->foreign('approved_by')->references('employee_id')->on('users')->onUpdate('cascade')->onDelete('cascade'); 
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
        Schema::dropIfExists('request_records');
    }
}
