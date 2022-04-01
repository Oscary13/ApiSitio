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
        Schema::create('mono_clasificacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mono_id');
            $table->unsignedBigInteger('clasificacion_id');
            $table->foreign('mono_id')->references('id')->on('monos')->onDelete('cascade');
            $table->foreign('clasificacion_id')->references('id')->on('clasificacion')->onDelete('cascade');
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
        Schema::dropIfExists('mono_clasificacions');
    }
};
