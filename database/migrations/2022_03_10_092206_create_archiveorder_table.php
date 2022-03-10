<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchiveorderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archiveorder', function (Blueprint $table) {
            $table->id('archive_id');
            $table->dateTime('archive_date' )->nullable();
            $table->string('archive_action', 100)->nullable();
            $table->integer('expense_id')->nullable();
            $table->string('archive_message', 255)->nullable();
            $table->integer('empId')->nullable();
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
        Schema::dropIfExists('archiveorder');
    }
}
