<?php

use App\Models\TictalksCategory;
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
        Schema::create('tictalks', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->string('slug');
            $table->json('description')->nullable();
            $table->json('content');
            $table->foreignIdFor(TictalksCategory::class);
            $table->timestamp('published_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiktalks');
    }
};
