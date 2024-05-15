<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages_services', function (Blueprint $table) {
            $table->id();
            $table->mediumText('description');
            $table->mediumText('descriptionar');
            $table->string('tital');
            $table->string('titalar');
            $table->string('file_path')->nullable();
            $table->string('icon')->nullable();
            $table->date('Date')->nullable();
            $table->string('Byar')->nullable();
            $table->text('DesHeaderar')->nullable();
            $table->text('DesBodyar')->nullable();
            $table->text('DesFooterar')->nullable();
            $table->text('By')->nullable();
            $table->text('DesHeader')->nullable();
            $table->text('DesBody')->nullable();
            $table->text('DesFooter')->nullable();
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
        Schema::dropIfExists('pages_services');
    }
}
