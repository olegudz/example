<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->index('user_id', 'user_role_user_idx');
            $table->foreign('user_id', 'user_role_user_fk')->on('users')->references('id');

            $table->unsignedBigInteger('role_id')->nullable();
            $table->index('role_id', 'user_role_role_idx');
            $table->foreign('role_id', 'user_role_role_fk')->on('roles')->references('id');


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
        Schema::dropIfExists('role_user');
    }
}
