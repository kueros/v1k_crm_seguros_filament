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
        Schema::create('policies', function (Blueprint $table) {
            $table->id();

            // Relación con la tabla de clientes
            $table->foreignId('insurance_client_id')
                  ->constrained('insurance_clients')
                  ->onDelete('cascade'); // Si se borra un cliente, se borran sus pólizas.

            $table->string('policy_number')->unique();
            $table->enum('insurance_type', ['Automotor', 'Hogar', 'Vida', 'ART', 'Otro']);
            $table->enum('status', ['Activa', 'Vencida', 'Cancelada', 'Pendiente'])->default('Pendiente');
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('premium_amount', 10, 2);
            $table->enum('payment_frequency', ['Mensual', 'Trimestral', 'Semestral', 'Anual']);
            $table->text('details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policies');
    }
};
