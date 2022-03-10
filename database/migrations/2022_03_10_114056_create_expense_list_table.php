<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_list', function (Blueprint $table) {
            $table->id('expense_list_id');
            $table->integer('department_id')->nullable();
            $table->integer('prod_type')->nullable();
            $table->date('expense_date')->nullable();
            $table->integer('prod_id')->nullable();
            $table->float('cnt')->nullable();
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
        Schema::dropIfExists('expense_list');
    }
}
