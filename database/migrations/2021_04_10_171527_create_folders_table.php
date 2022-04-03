<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folders', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->string('ci');
            $table->string('exp');

            $table->date('birthday');
            $table->string('stateCivil');
            $table->string('gender');

            $table->string('direction');
            $table->string('city');
            $table->string('province');

            $table->string('landline');
            $table->string('movilPhone');

            $table->string('profession');
            $table->string('type')->nullable();

            //referencia
            $table->string('nameRef')->nullable();
            $table->string('ciRef')->nullable();
            $table->string('expRef')->nullable();
            $table->string('landlineRef')->nullable();

            $table->string('directionRef')->nullable();
            $table->string('tipyRef')->nullable();

            //CoDeudor
            $table->string('coSigner')->nullable();
            $table->string('ciCoS')->nullable();
            $table->string('expCoS')->nullable();
            $table->string('landlineCoS')->nullable();

            $table->string('directionCoS')->nullable();

            //GaranteOne
            $table->string('garanteOne')->nullable();
            $table->string('movilPhoneGaOne')->nullable();

            $table->string('directionGaOne')->nullable();

            //GaranteTwo
            $table->string('garanteTwo')->nullable();
            $table->string('movilPhoneGaTwo')->nullable();

            $table->string('directionGaTwo')->nullable();

            //Prestamo
            $table->date('disburnsement');
            $table->date('pay');

            $table->integer('money');
            $table->string('state');

            $table->text('observation');

            $table->unsignedBigInteger('warranty_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('agency_id');
            $table->timestamps();

            //relation
            $table->foreign('warranty_id')->references('id')->on('warranties')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('agency_id')->references('id')->on('agencies')
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
        Schema::dropIfExists('folders');
    }
}
