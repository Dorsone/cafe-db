<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepBalanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dep_balance', function (Blueprint $table) {
            $table->id('dep_balance_id');
            $table->date('b_date')->nullable();
            $table->integer('prod_id')->nullable();
            $table->float('startCount')->nullable();
            $table->float('endCount')->nullable();
            $table->float('CurEndCount')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('type');
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
        Schema::dropIfExists('dep_balance');
    }
}
