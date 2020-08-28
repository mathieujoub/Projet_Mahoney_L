<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\Countries;

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
            $table->string('lastname')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->date('birth')->nullable();
            $table->string('nationality', 50)->nullable();
            $table->string('why_survey', 250)->nullable();
            $table->timestamp('date_survey', 6)->nullable();
            $table->foreignId('professional_situations_id')->nullable()->constrained();
            $table->foreignId('newsletters_id')->nullable()->constrained();
            $table->foreignId('surveys_id')->nullable()->constrained();
            $table->integer('score_survey')->nullable();
            $table->integer('score_categories')->nullable();
            $table->text('result_survey_text')->nullable();
            $table->text('result_categories_test')->nullable();
            $table->rememberToken();
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
