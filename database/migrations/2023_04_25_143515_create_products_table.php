<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('desc');
            $table->float('price');
            $table->string('imageUrl');
            $table->enum("isPublished", ["published", "not_published"])->default("not_published");
            $table->enum("state", ["discount_applied", "standard"]);
            $table->timestamps();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('size_id');
            
            $table
                ->foreign('category_id')
                ->references('id')->on('categories');
            $table
                ->foreign('size_id')
                ->references('id')->on('sizes');
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
}
