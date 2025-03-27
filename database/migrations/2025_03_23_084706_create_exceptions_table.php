<?php

use App\Models\Site;
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
        Schema::create('exceptions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Site::class);
            $table->boolean('resolved')->default(false);
            $table->string('message')->nullable();
            $table->string('url')->nullable();
            $table->json('data')->nullable();

            $table->timestamps();

            $table->index(['site_id', 'resolved', 'message']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exceptions');
    }
};
