<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pqrs_gcb', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_subject');
            $table->unsignedBigInteger('id_type');
            $table->unsignedBigInteger('id_status');
            $table->foreign('id_subject')->references('id')->on('pqrs_subject')->onDelete('cascade');
            $table->foreign('id_type')->references('id')->on('pqrs_type')->onDelete('cascade');
            $table->foreign('id_status')->references('id')->on('status_pqrs')->onDelete('cascade');
            $table->string('document',50);
            $table->string('name');
            $table->string('lastname');
            $table->string('phone', 100);
            $table->string('email', 300);
            $table->text('other_subject');
            $table->text('message');
            $table->text('evidence');
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
        Schema::dropIfExists('pqrs_gcb');
    }
};
