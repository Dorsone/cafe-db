<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfflistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offlist', function (Blueprint $table) {
            $table->id('offList_id');
            $table->integer('off_id')->nullable();
            $table->integer('type')->nullable();
            $table->float('count')->nullable();
            $table->integer('prod_id')->nullable();
            $table->integer('costPrice')->nullable();
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
        Schema::dropIfExists('offlist');
    }
}
