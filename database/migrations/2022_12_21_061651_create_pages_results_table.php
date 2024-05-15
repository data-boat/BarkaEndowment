<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages_results', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('secountname')->nullable();
            $table->string('thairdname')->nullable();
            $table->string('firstnamear')->nullable();
            $table->string('secountnamear')->nullable();
            $table->string('thairdnamear')->nullable();
            $table->integer('first')->nullable();
            $table->integer('secound')->nullable();
            $table->integer('thaird')->nullable();
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
        Schema::dropIfExists('pages_results');
    }
}
