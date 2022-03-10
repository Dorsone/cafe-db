<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInexpenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inexpense', function (Blueprint $table) {
            $table->id('inexpense_id');
            $table->dateTime('inexp_date')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('fromDepId');
            $table->integer('inexpSum');
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
        Schema::dropIfExists('inexpense');
    }
}
