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
        Schema::create('product_reviews', function (Blueprint $table) {
            $table->integer('IDReview')->primary()->autoIncrement();
            $table->integer('IDCustomer');
            $table->integer('IDProduct');
            $table->string('ReviewText', 255);
            $table->enum('ReviewRate', ['1', '2', '3', '4', '5']);
            $table->boolean('ReviewActive')->default(1);

            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('IDCustomer')->references('IDCustomer')->on('customers')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('IDProduct')->references('IDProduct')->on('products')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->charset('utf8mb4');
            $table->collation('utf8mb4_general_ci');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_reviews');
    }
};
