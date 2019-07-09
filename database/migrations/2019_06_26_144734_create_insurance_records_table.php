<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsuranceRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurance_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('licence_plate');
            $table->foreign('licence_plate')->references('licence_plate')->on('vehicle_description')->onUpdate('cascade'); 
            $table->string('type');
            $table->string('company');
            $table->integer('cost');
            $table->date('renewal_date');
            $table->date('expiery_date');
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
        Schema::dropIfExists('insurance_records');
    }
}
