<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()


    {    Schema::create('services', function (Blueprint $table) {
        $table->id('servicio_id');
        
        $table->string('nombre');
        $table->string('descripcion');

        $table->string('tiempo_max');
       ;
      

        $table->string('costo_extra');
        $table->string('clave');

        $table->unsignedBigInteger('promocion_id');
        $table->foreign("promocion_id")->references("promocion_id")->on("promotions")
        ->onDelete("cascade")->onUpdate("cascade");

      
    

        
        
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
