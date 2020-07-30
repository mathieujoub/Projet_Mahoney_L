<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMahoneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_mahoneys', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastename');
            $table->string('birth');
            $table->string('nationnality');
            $table->string('why_survey');
            $table->string('date_survey');
            $table->string('professional_situation_id');
            $table->string('newsletters_id');
            $table->string('survey_id');
            $table->string('score_survey');
            $table->string('score_catergorys');
            $table->string('result_surevey_text');
            $table->string('result_categoty_test');
            $table->string('started_at');
            $table->string('ended_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_mahoneys');
    }
}
