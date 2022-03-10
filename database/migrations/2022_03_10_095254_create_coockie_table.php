<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoockieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coockie', function (Blueprint $table) {
            $table->id('coockie_id');
            $table->date('coockie_date')->nullable();
            $table->string('coockie_start', 50)->nullable();
            $table->string('coockie_end', 50)->nullable();
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
        Schema::dropIfExists('coockie');
    }
}
