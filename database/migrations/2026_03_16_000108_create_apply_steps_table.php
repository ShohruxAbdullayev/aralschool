<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('apply_steps', function (Blueprint $table): void {
            $table->id();
            $table->unsignedInteger('sort_order')->default(0);
            $table->string('type')->default('left');
            $table->json('title');
            $table->json('content');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('apply_steps');
    }
};
