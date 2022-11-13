<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('slug')->unique();
            $table->float('price');   
            $table->text('content');
            $table->text('content_en')->nullable();
            $table->text('content_ru')->nullable();
            $table->string('image')->nullable();
            $table->integer('category_id')->unsigned();
            $table->integer('view')->unsigned()->default(0);

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
        Schema::dropIfExists('products');
    }
};
