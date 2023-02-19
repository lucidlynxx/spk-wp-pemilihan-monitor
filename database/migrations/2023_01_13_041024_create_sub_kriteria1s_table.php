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
        Schema::create('sub_kriteria1s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('ukuranLayar');
            $table->string('slug')->unique();
            $table->integer('nUkuranLayar');
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
        Schema::dropIfExists('sub_kriteria1s');
    }
};
