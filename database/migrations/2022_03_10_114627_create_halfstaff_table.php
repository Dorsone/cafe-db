<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHalfstaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halfstaff', function (Blueprint $table) {
            $table->id('halfstuff_id');
            $table->string('name', 50)->nullable();
            $table->integer('stuff_type')->nullable();
            $table->integer('price');
            $table->float('count');
            $table->integer('department_id');
            $table->integer('status');
            $table->integer('distrib');
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
        Schema::dropIfExists('halfstaff');
    }
}
