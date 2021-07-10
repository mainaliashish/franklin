<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title')->nullable();
            $table->string('meta_tags')->nullable();
            $table->string('meta_description')->nullable();
            $table->integer('number_of_visas_lodged')->nullable();
            $table->integer('number_of_students_enrolled')->nullable();
            $table->integer('number_of_partner_universities')->nullable();
            $table->integer('years_of_excellence')->nullable();
            $table->integer('number_of_teams')->nullable();
            $table->integer('number_of_countries')->nullable();
            $table->integer('number_of_branches')->nullable();
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
        Schema::dropIfExists('results');
    }
}
