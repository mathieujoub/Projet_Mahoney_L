<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalSituationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_situations', function (Blueprint $table) {
            $table->id();
            $table->integer('Student')->nullable();
            $table->integer('Self_employed')->nullable();
            $table->integer('Employed')->nullable();
            $table->integer('Unemployed')->nullable();
            $table->integer('Other')->nullable();
            $table->integer('Changing_jobs')->nullable();
            $table->text('Description_other', 80)->nullable();
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
        Schema::dropIfExists('professional_situations');
    }
}
