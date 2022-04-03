<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('nurej');
            $table->string('webid');

            $table->string('judged')->nullable();
            $table->string('number')->nullable();

            $table->string('judge')->nullable();

            $table->string('secretary')->nullable();
            $table->string('secPhone')->nullable();

            $table->string('assistant')->nullable();
            $table->string('assPhone')->nullable();

            $table->string('diligence')->nullable();
            $table->string('dilPhone')->nullable();

            $table->date('date')->nullable()->nullable();

            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('start_id');

            $table->timestamps();

            //relation
            $table->foreign('subject_id')->references('id')->on('subjects')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('start_id')->references('id')->on('starts')
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
        Schema::dropIfExists('incomes');
    }
}
