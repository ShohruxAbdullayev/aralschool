<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mentors', function (Blueprint $table): void {
            $table->id();
            $table->string('image')->nullable();
            $table->string('category')->default('water');
            $table->unsignedInteger('sort_order')->default(0);
            $table->json('name');
            $table->json('bio');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mentors');
    }
};
