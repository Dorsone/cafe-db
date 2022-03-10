<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minfo', function (Blueprint $table) {
            $table->id('info_id');
            $table->date('info_date')->nullable();
            $table->integer('proceed')->nullable();
            $table->integer('parish')->nullable();
            $table->integer('term')->nullable();
            $table->integer('azizTerm')->nullable();
            $table->integer('kassa')->nullable();
            $table->integer('tortShams')->nullable();
            $table->integer('meat')->nullable();
            $table->integer('other')->nullable();
            $table->integer('gosBank')->nullable();
            $table->integer('waitor')->nullable();
            $table->integer('genDir')->nullable();
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
        Schema::dropIfExists('minfo');
    }
}
