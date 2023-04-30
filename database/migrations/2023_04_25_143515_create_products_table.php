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
            $table->id();
            $table->string('name');
            $table->string('desc');
            $table->decimal('price', 10, 2);
            $table->string('imageUrl');
            $table->enum('size', ['XS', 'S', 'M', 'L', 'XL']);
            $table->boolean('isPublished')->default(0);
            $table->enum("state", ["promotion", "standard"]);
            $table->string('reference', 16);
            $table->foreignId('category_id')->constrained('categories');
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
}
