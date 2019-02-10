<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('slug');
            $table->text('department_id');
            $table->string('name');
            $table->string('email', 191)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone');
            $table->text('image')->nullable();
            $table->string('n_id');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('urgent_contact');
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->integer('salary')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('student_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('slug');
            $table->text('department_id');
            $table->string('student_id', 20)->unique();
            $table->string('name');
            $table->string('email', 191)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone');
            $table->text('image')->nullable();
            $table->string('n_id');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('urgent_contact');
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->integer('waver')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('department_infos');
        Schema::dropIfExists('student_infos');
    }
}
