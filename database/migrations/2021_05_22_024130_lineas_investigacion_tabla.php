<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LineasInvestigacionTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas_investigacion', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('objetivo');
            $table->string('area1')->nullable();
            $table->string('area2')->nullable();
            $table->string('area3')->nullable();
            $table->string('area4')->nullable();
            $table->string('labor')->nullable();
            $table->string('imagen')->nullable();
            $table->timestamps();
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
}
