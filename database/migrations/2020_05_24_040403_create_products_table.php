<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('title')->require();
            $table->string('sku')->unique();
            $table->text('description')->require();
            $table->text('body')->require();
            $table->string('slug')->require();
            $table->string('tags')->nullable();
            $table->boolean('active')->default(1);
            $table->integer('viewCount')->default(0);
            $table->integer('commentCount')->default(0);
            $table->integer('shareCount')->default(0);
            $table->integer('salesNumber')->default(0);
            $table->timestamps();
        });
        Schema::create('category_product', function (Blueprint $table) {

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->primary(['category_id' , 'product_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products', 'product_category');
    }
}
