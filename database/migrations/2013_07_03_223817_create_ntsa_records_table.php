<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNtsaRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ntsa_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('licence_number')->index()->unique();
            $table->string('first_name');
            $table->string('surname')->index();
            $table->date('expiery');
            $table->integer('national_id')->index();
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
        Schema::dropIfExists('ntsa_records');
    }
}
