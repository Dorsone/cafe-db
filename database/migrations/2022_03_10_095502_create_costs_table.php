<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costs', function (Blueprint $table) {
            $table->id('cost_id');
            $table->integer('summ')->nullable();
            $table->dateTime('cost_date')->nullable();
            $table->string('comment', 100)->nullable();
            $table->integer('employee_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('contractor_id')->nullable();
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
        Schema::dropIfExists('costs');
    }
}
