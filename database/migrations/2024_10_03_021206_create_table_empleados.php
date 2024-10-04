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
        Schema::create('table_empleados', function (Blueprint $table) {
            $table->id('id_empleado');
            $table->string('nombres', 50)->nullable();
            $table->string('apellidos', 50)->nullable();
            $table->string('telefono', 20)->nullable();
            $table->string('direccion', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->decimal('salario', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_empleados');
    }
};
