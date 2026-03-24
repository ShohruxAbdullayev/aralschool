<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('research_themes', function (Blueprint $table): void {
            $table->id();
            $table->string('image')->nullable();
            $table->unsignedInteger('number')->default(0);
            $table->unsignedInteger('sort_order')->default(0);
            $table->json('title');
            $table->json('description');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('research_themes');
    }
};
