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
        Schema::create('atividades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('turma_id')->constrained('turmas');
            $table->foreignId('tipo_atividade_id')->constrained('tipo_atividades');
            $table->text('descricao');
            $table->timestamp('data_postagem')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->date('prazo_entrega')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atividades');
    }
};
