<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHalfstuffStructureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halfstuff_structure', function (Blueprint $table) {
            $table->id('halfstruct_id');
            $table->integer('halfstuff_id')->nullable();
            $table->integer('prod_id')->nullable();
            $table->float('amount')->nullable();
            $table->integer('types');
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
        Schema::dropIfExists('halfstuff_structure');
    }
}
