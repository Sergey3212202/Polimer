<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGelleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('gelleries');
        Schema::create('gelleries', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('product_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gelleries',function (Blueprint $table){
           $table->dropForeign('gelleries_product_id_foreign');
        });
        Schema::dropIfExists('gelleries');
    }
}
