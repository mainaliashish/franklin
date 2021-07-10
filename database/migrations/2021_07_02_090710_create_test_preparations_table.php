<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestPreparationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_preparations', function (Blueprint $table) {
            $table->id();
            $table->string('test_name');
            $table->string('slug');
            $table->string('meta_title')->nullable();
            $table->string('meta_tags')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('test_image')->nullable();
            $table->text('test_description');
            $table->text('test_modules')->nullable();
            $table->string('test_module_image')->nullable();
            $table->text('test_results')->nullable();
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
        Schema::dropIfExists('test_preparations');
    }
}
