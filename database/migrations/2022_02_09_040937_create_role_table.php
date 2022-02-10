<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email');
            $table->string('userrole')->default('User');
            $table->string('password');
            $table->integer('status')->default(1);
            $table->integer('dashboard')->default(1);
            $table->integer('about')->default(1);
            $table->integer('contact')->default(1);
            $table->integer('news')->default(1);
            $table->integer('setting')->default(0);
            $table->integer('support')->default(0);
            $table->integer('user')->default(0);
            $table->string('changedName')->nullable();
            $table->string('sessionData1')->nullable();
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
        Schema::dropIfExists('role');
    }
}
