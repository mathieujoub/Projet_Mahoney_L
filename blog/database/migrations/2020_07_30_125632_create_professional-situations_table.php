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
            $table->string('inactivity')->nullable();
            $table->string('activity')->nullable();
            $table->string('retraining')->nullable();
            $table->string('freelance')->nullable();
            $table->string('id_others')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

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
