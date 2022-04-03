<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('returneds', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->string('ci');
            $table->string('exp');

            //Documents
            $table->string('documentOne')->nullable();
            $table->string('documentTwo')->nullable();
            $table->string('documentThree')->nullable();
            $table->string('documentFour')->nullable();
            $table->string('documentFive')->nullable();
            $table->string('documentSix')->nullable();
            $table->string('documentSeven')->nullable();
            $table->string('documentEight')->nullable();

            $table->unsignedBigInteger('user_id');

            $table->timestamps();

            //relation
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('returneds');
    }
}
