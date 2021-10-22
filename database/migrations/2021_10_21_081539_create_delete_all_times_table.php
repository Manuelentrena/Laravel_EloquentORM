<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeleteAllTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Schema::table('users', function (Blueprint $table) {
            $table->dropTimestamps();
        }); */
        Schema::table('cities', function (Blueprint $table) {
            $table->dropTimestamps();
        });
        Schema::table('companies', function (Blueprint $table) {
            $table->dropTimestamps();
        });
        /* Schema::table('projects', function (Blueprint $table) {
            $table->dropTimestamps();
        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /* Schema::table('users', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('cities', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('companies', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('projects', function (Blueprint $table) {
            $table->timestamps();
        }); */
    }
}
