<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('starts', function (Blueprint $table) {
            $table->bigIncrements('id');

            //Deudor
            $table->string('name');
            $table->string('ci');
            $table->string('exp');

            // Codeudor
            $table->string('coSigner')->nullable();
            $table->string('ciCoS')->nullable();
            $table->string('expCoS')->nullable();

            $table->string('direction');
            $table->string('landline');

            //Garante
            $table->string('garanteOne')->nullable();
            $table->string('ciGa')->nullable();
            $table->string('expGa')->nullable();

            //CoGarante
            $table->string('garanteTwo')->nullable();
            $table->string('ciCoGa')->nullable();
            $table->string('expCoGa')->nullable();

            $table->string('directionGa')->nullable();
            $table->string('landlineGa')->nullable();


            //info deuda
            $table->date('firmCont');
            $table->date('disbursement');
            $table->date('defaulter');

            $table->integer('disMoney');
            $table->integer('salCap');
            $table->string('currency');
            $table->integer('numberOp');

            $table->text('descriptionDeOne');
            $table->text('descriptionDeTwo');
            $table->text('descriptionDeThree');

            //Documents
            $table->string('contrato')->nullable();
            $table->string('bolDes')->nullable();
            $table->string('preLiq')->nullable();
            $table->string('croquisDom')->nullable();
            $table->string('recFirm')->nullable();
            $table->string('planPag')->nullable();
            $table->string('bolPag')->nullable();
            $table->string('croquisGar')->nullable();
            $table->string('ciDeu')->nullable();
            $table->string('ciGar')->nullable();


            $table->text('investBien');
            $table->text('AnalisisCaso')->nullable();

            $table->unsignedBigInteger('user_id');

            //relation
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');


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
        Schema::dropIfExists('starts');
    }
}
