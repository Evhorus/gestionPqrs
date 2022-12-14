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
        Schema::create('pqrs_subject', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_dependence');
            $table->foreign('id_dependence')->references('id')->on('pqrs_dependence')->onDelete('cascade');
            $table->string('name', 500);
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
        Schema::dropIfExists('pqrs_subject');
    }
};
