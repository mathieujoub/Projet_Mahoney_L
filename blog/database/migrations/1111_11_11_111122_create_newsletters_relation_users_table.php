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
        Schema::create('newsletters_relation_users', function (Blueprint $table) {
            $table->foreignId('user_mahoneys_id')->constrained()->onDelete('cascade');;
            $table->foreignId('newsletters_id')->constrained()->onDelete('cascade');; 
            $table->integer('subscribe');
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