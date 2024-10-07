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
        Schema::create('corousel', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('content1');
            $table->string('content2');
            $table->string('content3');
            $table->string('created_date');
            $table->string('photo',300);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corousel');
    }
};
