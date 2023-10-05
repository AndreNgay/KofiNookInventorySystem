<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('item_name')->unique();
            $table->binary('image');
            $table->string('description');
            $table->bigInteger('stock');
            $table->bigInteger('required_stock');
            $table->unsignedBigInteger('unit_id');
            $table->unsignedBigInteger('category_id');
            $table->float('cost');
            $table->string('type');

            // Foreign keys
            $table->foreign('unit_id')->references('id')->on('units');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}