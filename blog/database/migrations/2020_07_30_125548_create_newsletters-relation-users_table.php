<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewslettersRelationUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newslettersRelationUsers', function (Blueprint $table) {
            $table->foreignId('users_mahonneys_id')->constrained();
            $table->foreignId('newsletters_id')->constrained();
            $table->interger('subscribe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newslettersRelationUsers');
    }
}
