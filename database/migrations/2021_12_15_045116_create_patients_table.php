<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doc_id');
            $table->text('firstname');
            $table->text('lastname');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('address_id');
            $table->boolean('sex');
            $table->timestamp('age');
            $table->timestamps();
            $table->foreign('doc_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
