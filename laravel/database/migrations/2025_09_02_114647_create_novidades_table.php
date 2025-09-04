<?php
# Classe de criação da Entidade do Banco de dados - Tabela Novidades
# Usa o framework/biblioteca Migrate 

# para enviar a tabela para o banco executamos os comandos do Migration
# php artisan migrate - sobre as alterações e tabelas novas
# php artisan migrate:fresh - apaga os dados das tabelas e cria as novas
# php artisan migrate:refresh - apaga os dados e as tabelas e as recria
# php artisan migrate:rollback --steps=2 - retorna à versão anetrior do banco 
# php artisan:reset - reseta 

# importação das classes do Migrate
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Cria a tabela no banco de dados
     * 
     * CREATE TABLE IF NOT EXISTS estetica_t99.news ( 
     *      id_news INT(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
     *      email VARCHAR(254) NOT NULL UNIQUE,
     *      validado INT(1) NOT NULL DEFAULT 0,
     *      opt_out ENUM('sim','não') NOT NULL DEFAULT 'sim',
     *      data_criacao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
     *  )
     * 
     */
    public function up(): void
    {
        Schema::create('novidades', function (Blueprint $table) {
            $table->id('id_news'); # cria a PK
            $table->string('email', 254 )->unique(); # email único e obrigatório
            $table->integer('validado')->default(0);
            $table->enum('opt_out', ['sim', 'não'])->default('sim');
            $table->dateTime('data_criacao')->timestamps();
            $table->string('motivo_saida', 150 )->nullable(); # opcional
            $table->timestamps();
        });
    }

    /**
     * Remove a tabela
     */
    public function down(): void
    {
        Schema::dropIfExists('novidades');
    }
};
