<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaParkirTable extends Migration
{
    public function up()
    {
        Schema::create('area_parkir', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 30);
            $table->double('kapasitas');
            $table->string('keterangan', 100);
            $table->foreignId('kampus_id')->constrained('kampus');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('area_parkir');
    }
}
