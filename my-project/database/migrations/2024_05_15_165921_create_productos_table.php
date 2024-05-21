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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 60);
            $table->text('descripcion')->nullable();
            $table->double('precio');
            $table->enum('moneda', ['euro', 'dolar'])->default('euro');
            $table->boolean('disponible')->default(false);
            $table->unsignedBigInteger('categoria_id')->nullable();

            $table->foreign('categoria_id')
                    ->references('id')->on('categorias')
                    ->onDelete('set null');


            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
