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
            $table->tinyInteger('nationality')->unsigned()->default(Countries::FR);
            $table->string('why_survey', 250);
            $table->date('date_survey');
            $table->integer('professional_situation_id');
            $table->integer('newsletter_id');
            $table->integer('survey_id');
            $table->integer('score_survey');
            $table->integer('score_caterories');
            $table->text('result_survey_text');
            $table->text('result_categories_test');
            $table->timestamps('started_at');
            $table->timestamps('ended_at');
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
