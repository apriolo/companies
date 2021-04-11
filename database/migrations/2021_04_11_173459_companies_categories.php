<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompaniesCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_companies', function (Blueprint $table) {
            // $table->unsignedBigInteger('companies_id');
            // $table->unsignedBigInteger('categories_id');
            $table->foreignId('companies_id')->nullable()->constrained();
            $table->foreignId('categories_id')->nullable()->constrained();
            // $table->foreign('companies_id')->references('id')->on('companies');
            // $table->foreign('categories_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories_companies');
    }
}
