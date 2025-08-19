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
        Schema::table('posts', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('id');
            $table->string('author')->nullable()->after('content');
            $table->string('author_info')->nullable()->after('author');
            $table->string('category')->nullable()->after('author_info');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropColumn('author');
            $table->dropColumn('author_info');
            $table->dropColumn('category');
        });
    }
};
