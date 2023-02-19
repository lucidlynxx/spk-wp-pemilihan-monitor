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
        Schema::create('sub_kriteria3s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('teknologiPanel');
            $table->string('slug')->unique();
            $table->integer('nTeknologiPanel');
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
        Schema::dropIfExists('sub_kriteria3s');
    }
};
