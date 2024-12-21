<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_attribute_pivot', function (Blueprint $table) {
            $table->integer('IDProductAttribute')->primary()->autoIncrement();
            $table->integer('IDProduct');
            $table->integer('IDAttribute');
            $table->boolean('ProductAttributeActive')->default(1);

            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('IDProduct')->references('IDProduct')->on('products')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('IDAttribute')->references('IDAttribute')->on('product_attributes')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->charset('utf8mb4');
            $table->collation('utf8mb4_general_ci');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_attribute_pivot');
    }
};
