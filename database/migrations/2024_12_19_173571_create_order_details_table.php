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
        Schema::create('order_details', function (Blueprint $table) {
            $table->integer('IDDetail')->primary()->autoIncrement();
            $table->integer('IDOrder');
            $table->integer('IDProduct');

            $table->integer('DetailQty');
            $table->double('DetailPrice');
            $table->double('DetailVatPercent');
            $table->double('DetailVatPrice');
            $table->double('DetailTotal');

            $table->boolean('DetailActive')->default(1);

            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('IDOrder')->references('IDOrder')->on('orders')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('order_details');
    }
};
