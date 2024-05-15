<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages_companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->string('CompanyName')->nullable();
            $table->string('CompanyLogo')->nullable();
            $table->string('CompanyDesHeader')->nullable();
            $table->string('CompanyDesBody')->nullable();
            $table->string('CompanyDesFooter')->nullable();
            $table->string('CompanyImage')->nullable();
            $table->timestamps();
            $table->foreign('country_id')
                ->references('id')->on('pages_countries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages_companies');
    }
}
