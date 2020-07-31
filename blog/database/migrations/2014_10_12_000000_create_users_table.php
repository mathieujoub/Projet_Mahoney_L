<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastename')->nullable();
            $table->string('birth')->nullable();
            $table->string('nationnality')->nullable();
            $table->string('why_survey')->nullable();
            $table->string('date_survey')->nullable();
            $table->string('professional_situation_id')->nullable();
            $table->string('newsletters_id')->nullable();
            $table->string('survey_id')->nullable();
            $table->string('score_survey')->nullable();
            $table->string('score_catergorys')->nullable();
            $table->string('result_surevey_text')->nullable();
            $table->string('result_categoty_test')->nullable();
            $table->string('started_at')->nullable();
            $table->string('ended_at')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('users');
    }
}
