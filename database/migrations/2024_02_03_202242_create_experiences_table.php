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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('role')->nullable();
            $table->string('company')->nullable();
            $table->string('company_url')->nullable();
            $table->string('start_date');
            $table->string('end_date')->nullable();
            $table->enum('job_type', ['remote', 'in_office', 'hybrid', 'internship', 'apprenticeship', 'temporary', 'seasonal' ]);
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
