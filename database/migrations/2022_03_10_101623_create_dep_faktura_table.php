<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepFakturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dep_faktura', function (Blueprint $table) {
            $table->id('dep_faktura_id');
            $table->dateTime('real_date')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('fromDepId');
            $table->integer('faktura_sum');
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
        Schema::dropIfExists('dep_faktura');
    }
}
