<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills',function($table){
            $table->increments('id');
            $table->integer('id_customer')->unsigned();
            $table->foreign('id_customer')->references('id')->on('customers')->onDelete('CASCADE');
            $table->integer('id_status')->unsigned();
            $table->foreign('id_status')->references('id')->on('bill_status')->onDelete('CASCADE');
            $table->integer('id_payment')->unsigned();
            $table->foreign('id_payment')->references('id')->on('payments')->onDelete('CASCADE');
            $table->integer('total_price');
            $table->integer('total_product');
            $table->text('note');
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
        Schema::drop('bills');
    }
}
