<?php

// database/migrations/2025_08_create_certificates_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->string('file'); // path file PDF sertifikat
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
