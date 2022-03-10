<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense', function (Blueprint $table) {
            $table->id('expense_id');
            $table->string('prepCreate', 50)->nullable();
            $table->dateTime('order_date')->nullable();
            $table->integer('employee_id')->nullable();
            $table->integer('prepaidSum');
            $table->integer('prepaid');
            $table->integer('table');
            $table->integer('status');
            $table->integer('kind');
            $table->integer('debt');
            $table->string('comment', 100);
            $table->integer('mType');
            $table->integer('deleted');
            $table->integer('debtor_id')->nullable();
            $table->integer('terminal')->nullable();
            $table->integer('debtor_type');
            $table->integer('pCount');
            $table->integer('expSum')->nullable();
            $table->integer('costPrice')->nullable();
            $table->integer('banket')->nullable();
            $table->dateTime('closeTime')->nullable();
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
        Schema::dropIfExists('expense');
    }
}
