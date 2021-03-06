<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFullsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fulls', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('movement_id');
            $table->timestamps();
            //relation
            $table->foreign('movement_id')->references('id')->on('movements')
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
        Schema::dropIfExists('fulls');
    }
}
