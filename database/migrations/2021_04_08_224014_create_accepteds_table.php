<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcceptedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accepteds', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('transfer_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            //relation
            $table->foreign('transfer_id')->references('id')->on('transfers')
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
        Schema::dropIfExists('accepteds');
    }
}
