<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categories')->unsigned();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('hover_image')->nullable();
            $table->string('badges')->nullable();
            $table->string('badges_name')->nullable();
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
        Schema::dropIfExists('s_products');
    }
}
