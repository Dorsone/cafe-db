<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepStorageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dep_storage', function (Blueprint $table) {
            $table->id('dep_storage_id');
            $table->date('curDate')->nullable();
            $table->integer('prod_id')->nullable();
            $table->float('curCount');
            $table->float('price')->nullable();
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
        Schema::dropIfExists('dep_storage');
    }
}
