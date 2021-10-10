<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->integer('matches')->nullable();
            $table->integer('corners')->nullable();
            $table->integer('shots')->nullable();
            $table->integer('reviews')->nullable();
            $table->integer('trainings')->nullable();
            $table->integer('transfers')->nullable();
            $table->integer('profiling')->nullable();
            $table->integer('test')->nullable();
            $table->integer('scouting')->nullable();
            $table->integer('adm4_test')->nullable();
            $table->integer('m_4am')->nullable();
            $table->integer('m_5pm')->nullable();
            $table->integer('tag_trainer')->nullable();
            $table->integer('rating')->nullable();
            $table->integer('m_account')->nullable();
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('reports');
    }
}
