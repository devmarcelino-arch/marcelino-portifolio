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
    Schema::create('projetos', function (Blueprint $table) {
        $table->id();

        $table->string('titulo');
        $table->string('categoria');
        $table->text('descricao');

        $table->string('imagem')->nullable();
        $table->string('badge')->nullable();

        $table->string('link_demo')->nullable();
        $table->string('link_github')->nullable();

        $table->json('tecnologias')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projetos');
    }
};
