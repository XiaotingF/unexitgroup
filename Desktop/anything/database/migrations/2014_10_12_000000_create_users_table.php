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
            $table->string('name');
            $table->string('slug');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('avatar')->default('default.jpg');
            $table->string('password');
            $table->integer('q1')->default(0);
            $table->integer('q2')->default(0);
            $table->integer('q3')->default(0);
            $table->integer('q4')->default(0);
            $table->integer('q5')->default(0);
            $table->integer('q6')->default(0);
            $table->integer('q7')->default(0);
            $table->integer('q8')->default(0);
            $table->integer('q9')->default(0);
            $table->integer('q10')->default(0);
            $table->integer('q11')->default(0);
            $table->integer('q12')->default(0);
            $table->integer('importance1')->default(0);
            $table->integer('importance2')->default(0);
            $table->integer('importance3')->default(0);
            $table->integer('importance4')->default(0);
            $table->integer('importance5')->default(0);
            $table->integer('importance7')->default(0);
            $table->integer('importance9')->default(0);
            $table->integer('importance10')->default(0);
            $table->integer('importance11')->default(0);
            $table->integer('importance12')->default(0);
            $table->integer('p1')->default(0);
            $table->integer('p2')->default(0);
            $table->integer('p3')->default(0);
            $table->integer('p4')->default(0);
            $table->integer('p5')->default(0);
            $table->integer('w1')->default(0);
            $table->integer('w2')->default(0);
            $table->integer('w3')->default(0);
            $table->integer('w4')->default(0);
            $table->integer('w5')->default(0);
            $table->integer('m1')->default(0);
            $table->integer('m2')->default(0);
            $table->integer('m3')->default(0);
            $table->integer('m4')->default(0);
            $table->integer('m5')->default(0);
          


        
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('admin')->default(0);
            $table->boolean('status')->default(0);
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
