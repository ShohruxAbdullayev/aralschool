<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('info_paragraphs', function (Blueprint $table): void {
            $table->id();
            $table->unsignedInteger('sort_order')->default(0);
            $table->json('content');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('info_paragraphs');
    }
};
