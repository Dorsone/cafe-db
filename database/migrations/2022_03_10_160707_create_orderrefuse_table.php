<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderrefuseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderrefuse', function (Blueprint $table) {
            $table->id('refuse_id');
            $table->integer('order_id')->nullable();
            $table->float('count')->nullable();
            $table->integer('status');
            $table->dateTime('refuse_time')->nullable();
            $table->integer('refuse');
            $table->integer('notificate');
            $table->integer('add');
            $table->dateTime('not_time')->nullable();
            $table->dateTime('status_time');
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
        Schema::dropIfExists('orderrefuse');
    }
}
