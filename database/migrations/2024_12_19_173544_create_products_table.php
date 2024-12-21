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
        Schema::create('products', function (Blueprint $table) {
            $table->integer('IDProduct')->primary()->autoIncrement();
            $table->integer('IDSeller');
            $table->integer('IDCountry');
            $table->string('ProductCode', 255)->unique();
            $table->string('ProductNameEn', 255);
            $table->string('ProductNameAr', 255);
            $table->string('ProductImage', 255)->default('0.png');
            $table->double('ProductPrice');
            $table->boolean('ProductActive')->default(1);

            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('IDSeller')->references('IDSeller')->on('sellers')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('IDCountry')->references('IDCountry')->on('countries')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->charset('utf8mb4');
            $table->collation('utf8mb4_general_ci');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
