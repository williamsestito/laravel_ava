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
        Schema::create('turmas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('curso_id')->constrained('cursos');
            $table->foreignId('professor_id')->constrained('professores');
            $table->foreignId('monitor_id')->nullable()->constrained('monitores');
            $table->date('dt_inicio');
            $table->date('dt_fim');
            $table->enum('status', ['Ativa', 'Encerrada'])->default('Ativa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turmas');
    }
};
