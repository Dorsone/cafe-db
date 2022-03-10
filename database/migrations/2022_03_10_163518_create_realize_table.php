<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realize', function (Blueprint $table) {
            $table->id('realize_id');
            $table->integer('faktura_id')->nullable();
            $table->integer('prod_id')->nullable();
            $table->float('price')->nullable();
            $table->float('count')->nullable();
            $table->integer('realizeGroup_id');
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
        Schema::dropIfExists('realize');
    }
}
