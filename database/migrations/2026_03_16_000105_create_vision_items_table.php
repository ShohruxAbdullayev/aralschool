<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vision_items', function (Blueprint $table): void {
            $table->id();
            $table->string('image')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->json('title')->nullable();
            $table->json('text')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vision_items');
    }
};
