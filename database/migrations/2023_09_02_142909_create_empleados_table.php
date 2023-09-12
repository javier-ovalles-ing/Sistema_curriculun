
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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('primernombre',250);
            $table->string('segundonombre',250);
            $table->string('primerapellido',250);
            $table->string('segundoapellido',250);
            $table->string('foto')->default('fotos/default.jpg');
            $table->string('cv');
            $table->date('fechaingreso');
            
            // relacion uno a muchos | clave foranea. 
            $table->unsignedBigInteger('idpuesto'); 
            $table->foreign('idpuesto')
                ->references('id')
                ->on('puestos')
                ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};


