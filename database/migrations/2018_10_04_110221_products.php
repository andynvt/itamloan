<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function ($table){
            $table->increments('id');
            $table->integer('id_catalog')->unsigned();
            $table->foreign('id_catalog')->references('id')->on('catalogs')->onDelete('CASCADE');
            $table->integer('id_promo')->unsigned();
            $table->foreign('id_promo')->references('id')->on('promotions')->onDelete('CASCADE');
            $table->text('name');
            $table->integer('price');
            $table->text('specs');
            $table->text('warranty');
            $table->text('description');
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
        Schema::drop('products');
    }
}
