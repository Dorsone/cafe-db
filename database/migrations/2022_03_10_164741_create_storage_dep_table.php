<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStorageDepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storage_dep', function (Blueprint $table) {
            $table->id('storage_dep_id');
            $table->integer('prod_id')->nullable();
            $table->float('cnt')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('prod_type')->nullable();
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
        Schema::dropIfExists('storage_dep');
    }
}
