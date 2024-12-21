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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('IDUser')->primary()->autoIncrement();
            $table->integer('IDRole');
            $table->string('UserName', 255);
            $table->string('UserEmail', 255);
            $table->string('UserPhone', 255);
            $table->string('UserPassword', 255);
            $table->string('UserImage', 255)->default('0.png');
            $table->boolean('UserActive')->default(1);
            
            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('IDRole')->references('IDRole')->on('user_roles')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->charset('utf8mb4');
            $table->collation('utf8mb4_general_ci');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
