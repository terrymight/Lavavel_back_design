<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * browser_language
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('browser_language')->default('pt_BR'); // Add new column
            $table->string('profile_picture')->nullable(); // Add new column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('browser_language'); // Rollback changes
            $table->dropColumn('profile_picture'); // Rollback changes
        });
    }
};
