<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrintTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('print', function (Blueprint $table) {
            $table->id('printId');
            $table->string('waiter', 50);
            $table->integer('table');
            $table->string('printTime', 50)->nullable();
            $table->string('department', 50)->nullable();
            $table->string('printer', 50)->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('print');
    }
}
