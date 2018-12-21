<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name",30);
            $table->string("phone",11)->unique();
            $table->string("email",30)->unique();
            $table->string("job_info",30);
            $table->string("picture",60);
            $table->string("melli_number",10)->unique();
            $table->string("password",30);
            $table->string("token",8);
            $table->tinyInteger("confirmed")->unsigned();
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
        Schema::dropIfExists('teachers');
    }
}
