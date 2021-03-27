<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product')->unsigned();
            $table->string('namber')->nullable();
            $table->string('namber_detail')->nullable();
            $table->string('china_name')->nullable();
            $table->string('russian_name')->nullable();
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
        Schema::dropIfExists('s_items');
    }
}
