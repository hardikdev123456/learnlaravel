<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * for Create category Table
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category_name');
            $table->text('category_desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * for Reverse category Table
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
