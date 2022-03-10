<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMdepbalanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mdepbalance', function (Blueprint $table) {
            $table->id('mBalance_id');
            $table->date('b_date')->nullable();
            $table->integer('costPrice')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('expSum')->nullable();
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
        Schema::dropIfExists('mdepbalance');
    }
}
