<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->text('image');
            $table->string('title');
            $table->integer('quantity')->nullable();
            $table->string('weight');
            $table->float('dimension');
            $table->string('material');
            $table->string('color');
            $table->integer('status');
            $table->unsignedInteger('id_category');
            // $table->unsignedInteger('id_brand');
            $table->foreign('id_category')->references('id')->on('tb_category');
            // $table->foreign('id_brand')->references('id')->on('tb_brand');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_products');
    }
};
