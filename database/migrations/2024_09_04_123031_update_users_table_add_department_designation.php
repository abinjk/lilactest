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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('fk_department')->nullable()->constrained('departments')->onDelete('cascade'); // Fk_department
            $table->foreignId('fk_designation')->nullable()->constrained('designations')->onDelete('cascade'); // Fk_designation
            $table->string('phone_number')->nullable(); // Phone_number
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['fk_department']); // Drop Fk_department foreign key
            $table->dropForeign(['fk_designation']); // Drop Fk_designation foreign key
            $table->dropColumn('fk_department'); // Drop Fk_department column
            $table->dropColumn('fk_designation'); // Drop Fk_designation column
            $table->dropColumn('phone_number'); // Drop Phone_number column
        });
    }
};
