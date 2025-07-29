<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHealthFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('kana', 60);
            $table->date('birthday')->nullable();
            $table->enum('gender',['male', 'female', 'other'])->nullable();
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->tinyInteger('menstruation_use')->nullable()->default(0);
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
