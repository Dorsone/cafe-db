<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('off', function (Blueprint $table) {
            $table->id('off_id');
            $table->dateTime('off_date')->nullable();
            $table->integer('department_id')->nullable();
            $table->string('comment', 100)->nullable();
            $table->integer('employee_id')->nullable();
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
        Schema::dropIfExists('off');
    }
}
