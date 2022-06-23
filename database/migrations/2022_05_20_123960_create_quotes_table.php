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
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->time('hora_programada');
            $table->time('hora_inicio');
            $table->time('hora_fin');

            $table->time('tiempo_total');
       


            $table->float('total_pago',12,2);

            
            $table->unsignedBigInteger('employee_id');
            $table->foreign("employee_id")->references("id")->on("employees")
            ->onDelete("cascade")->onUpdate("cascade");
            $table->unsignedBigInteger('waytopay_id');
            $table->foreign("waytopay_id")->references("id")->on("waytopays")
            ->onDelete("cascade")->onUpdate("cascade");
            $table->timestamps();

            $table->unsignedBigInteger('servicio_id');
            $table->foreign("servicio_id")->references("servicio_id")->on("services")
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
        Schema::dropIfExists('quotes');
    }
};
