<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('phone');
            $table->string('nrc');
            $table->string('address');
            $table->unsignedBigInteger('blood_type_id')->nullable();
            $table->string('gender');
            $table->date('dob');
            $table->unsignedBigInteger('township_id');
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');

            $table->foreign('blood_type_id')
                  ->references('id')->on('blood_types')
                  ->onDelete('cascade');

            $table->foreign('township_id')
                  ->references('id')->on('townships')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donors');
    }
}
