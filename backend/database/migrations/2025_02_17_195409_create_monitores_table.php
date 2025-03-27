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
        Schema::create('monitores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('dt_nascimento')->nullable();
            $table->string('cpf', 14)->unique();
            $table->string('rg', 20)->nullable();
            $table->string('email')->unique();
            $table->string('celular', 20)->nullable();
            $table->string('cep', 10)->nullable();
            $table->string('logradouro')->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('complemento')->nullable();
            $table->string('cidade', 100)->nullable();
            $table->char('sgl_uf', 2)->nullable();
            $table->string('nome_mae')->nullable();
            $table->string('nome_pai')->nullable();
            $table->string('escolaridade')->nullable();
            $table->boolean('possui_deficiencia')->default(false);
            $table->text('detalhes_deficiencia')->nullable();
            $table->string('senha');
            $table->boolean('termos')->default(true);
            $table->text('foto')->nullable();
            $table->enum('status', ['Ativo', 'Inativo'])->default('Ativo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitores');
    }
};
