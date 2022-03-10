<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestProdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_prod', function (Blueprint $table) {
            $table->id('reqProd_id');
            $table->integer('request_id')->nullable();
            $table->float('count')->nullable();
            $table->integer('prod_id')->nullable();
            $table->integer('depId')->nullable();
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
        Schema::dropIfExists('request_prod');
    }
}
