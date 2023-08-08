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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono',15);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->date('f_nacimiento');
            $table->string('genero');
            $table->float('estatura');
            $table->integer('activo');
            $table->string('pago');
            $table->date('f_Pago');
            $table->timestamps();
        });

        Schema::create('PYeard', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente')->nullable();  
            $table->integer('Year');
            $table->timestamps();

            
            $table->foreign('id_cliente')
                ->references('id')->on('clientes')
                ->onDelete('set null');
        });

        Schema::create('PMonth', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_PYeard')->nullable(); 
            $table->string('mes');
            $table->float('peso');
            $table->float('por_grasa');
            $table->float('lbs_grasa');
            $table->float('masa_muscular');
            $table->float('bmi');
            $table->timestamps();

            $table->foreign('id_PYeard')
                ->references('id')->on('PYeard')
                ->onDelete('set null');
        });

    }
    //php artisan migrate:refresh --path=database/migrations/2023_05_18_180848_clientes.php
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PYeard');
        Schema::dropIfExists('PMonth');
        Schema::dropIfExists('clientes');
    }
};
