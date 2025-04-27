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
        Schema::create('cadastro_alunos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomeAluno');
            $table->date('dataNascimento');
            $table->string('maeAluno');
            $table->string('paiAluno');
            $table->string('telefone');
            $table->string('email');
            $table->string('endereco');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadastro_alunos');
    }
};
