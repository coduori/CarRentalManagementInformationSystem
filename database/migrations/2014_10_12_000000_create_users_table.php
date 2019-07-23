<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id')->nullable()->index();
            $table->integer('licence_number')->nullable()->unique();
            $table->integer('national_id')->nullable()->unique();
            $table->foreign('national_id')->references('national_id')->on('ntsa_records')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('licence_number')->references('licence_number')->on('ntsa_records')  ->onUpdate('cascade')->onDelete('cascade');
            $table->string('first_name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('role');
            $table->date('licence_expiery')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_active')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
