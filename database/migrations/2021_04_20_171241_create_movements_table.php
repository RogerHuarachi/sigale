<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->date('term');
            $table->text('obs')->nullable();

            $table->unsignedBigInteger('start_id')->nullable();
            $table->unsignedBigInteger('step_id')->nullable();
            $table->timestamps();

            $table->foreign('start_id')->references('id')->on('starts')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('step_id')->references('id')->on('steps')
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
        Schema::dropIfExists('movements');
    }
}
