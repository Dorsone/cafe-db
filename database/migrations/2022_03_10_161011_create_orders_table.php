<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->integer('expense_id')->nullable();
            $table->integer('just_id')->nullable();
            $table->integer('type')->nullable();
            $table->float('count')->nullable();
            $table->integer('status');
            $table->integer('refuse');
            $table->integer('deleted');
            $table->integer('notificate');
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
        Schema::dropIfExists('orders');
    }
}
