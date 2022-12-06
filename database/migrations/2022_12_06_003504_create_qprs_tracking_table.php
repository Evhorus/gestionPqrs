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
        Schema::create('qprs_tracking', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pqrs');
            $table->foreign('id_pqrs')->references('id')->on('pqrs_gcb')->onDelete('cascade');
            $table->bigInteger('id_user');
            $table->text('message_tracking');
            $table->text('obersevation_user');
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
        Schema::dropIfExists('qprs_tracking');
    }
};
