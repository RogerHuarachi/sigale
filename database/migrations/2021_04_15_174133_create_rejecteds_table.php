<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRejectedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rejecteds', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->text('description')->nullable();

            $table->unsignedBigInteger('start_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            //relation
            $table->foreign('start_id')->references('id')->on('starts')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('rejecteds');
    }
}
