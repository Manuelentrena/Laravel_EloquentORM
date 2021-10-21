<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            // Structure
            $table->id();
            $table->unsignedBigInteger("city_id");
            $table->unsignedBigInteger("company_id");
            $table->unsignedBigInteger("user_id");
            $table->float('budget')->nullable();
            $table->string('name')->nullable();
            $table->date('execution_date')->nullable();
            $table->tinyInteger('is_active');
            $table->timestamps();

            // Foreign Keys
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
