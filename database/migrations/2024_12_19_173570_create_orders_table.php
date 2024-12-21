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
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('IDOrder')->primary()->autoIncrement();
            $table->integer('IDStatus');
            $table->integer('IDCustomer');
            $table->datetime('OrderDateTime');
            $table->boolean('OrderActive')->default(1);

            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('IDStatus')->references('IDStatus')->on('order_status')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('IDCustomer')->references('IDCustomer')->on('customers')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->charset('utf8mb4');
            $table->collation('utf8mb4_general_ci');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
