<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name', 50);
            $table->string('fa_hu_name', 50);
            $table->string('mother_name', 50);
            $table->string('profile_pic', 100)->nullable();
            $table->string('signature', 100)->nullable();
            $table->string('mobile', 50)->unique();
            $table->integer('role_id')->unsigned()->default(1);
            $table->string('password', 100);
            $table->string('type', 100)->default('regular');
            $table->boolean('active')->default(true);
            $table->string('gender', 20)->default('male');
            $table->timestamp('join_date')->nullable();
            $table->string('div_br_off', 100);
            $table->string('designation', 100);
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
