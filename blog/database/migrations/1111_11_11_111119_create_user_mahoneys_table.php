<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\Countries;


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
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->year('birth');
            $table->string('nationality', 50)->default(Countries::FR);
            $table->string('why_survey', 250);
            $table->date('date_survey');
            $table->foreignId('professional_situations_id')->constrained();
            $table->foreignId('newsletters_id')->constrained();
            $table->foreignId('surveys_id')->constrained();
            $table->integer('score_survey');
            $table->integer('score_categories');
            $table->text('result_survey_text');
            $table->text('result_categories_test');
            $table->DATETIME('started_at');
            $table->DATETIME('ended_at');
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
