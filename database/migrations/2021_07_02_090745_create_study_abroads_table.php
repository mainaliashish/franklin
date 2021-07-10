<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyAbroadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_abroads', function (Blueprint $table) {
            $table->id();
            $table->string('country_name')->unique();
            $table->string('slug')->unique();
            $table->string('meta_title')->nullable();
            $table->string('meta_tags')->nullable();
            $table->string('meta_description')->nullable();
            $table->text('country_description');
            $table->string('country_image')->nullable();
            $table->text('education_system')->nullable();
            $table->string('education_system_image')->nullable();
            $table->text('cost_of_studies')->nullable();
            $table->string('cost_of_studies_image')->nullable();
            $table->text('living_and_working')->nullable();
            $table->text('visa_procedures')->nullable();
            $table->text('offered_courses')->nullable();
            $table->text('popular_universities')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('study_abroads');
    }
}
