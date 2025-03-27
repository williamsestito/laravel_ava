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
        Schema::create('turma_professores', function (Blueprint $table) {
            $table->foreignId('turma_id')->constrained('turmas');
            $table->foreignId('professor_id')->constrained('professores');
            $table->primary(['turma_id', 'professor_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turma_professores');
    }
};
