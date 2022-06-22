<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastros', function (Blueprint $table) {
            $table->id();
            $table->string('Situ', 30);
            $table->string('Tp_pgto', 30);
            $table->string('Depart', 30);
            $table->string('Carg', 30);
            $table->string('Jor_sema', 10);
            $table->string('pp_adiant', 10);
            $table->string('Sal', 20);
            $table->date('Dt_Adm');
            $table->string('Tp_Adm', 30);
            $table->string('Descri_fun', 150);
            $table->string('Nm_comple', 55);
            $table->date('Dt_nasc');
            $table->string('sex', 10);
            $table->string('Defi', 30);
            $table->string('Est_civi', 20);
            $table->string('Gr_instru', 30);
            $table->string('Nm_pai', 55);
            $table->string('Nm_mae', 55);
            $table->string('CEP', 15);
            $table->string('tp', 30);
            $table->string('Rua', 55);
            $table->string('Nm', 10);
            $table->string('Comple', 55);
            $table->string('Bairr', 55);
            $table->string('Cid', 30);
            $table->string('Uf', 3);
            $table->string('IBGE', 15);
            $table->string('Tel_Fix', 20);
            $table->string('Cel', 20);
            $table->string('Email', 55);
            $table->string('CPF', 15);
            $table->string('RG', 15);
            $table->string('Org_Emiss', 15);
            $table->string('PIS', 15);
            $table->string('Tit_Ele', 30);
            $table->string('Zona', 30);
            $table->string('Sec', 30);
            $table->string('Serv_milit', 30);
            $table->string('CNH', 30);
            $table->string('Cat', 15);
            $table->date('Dt_emiss');
            $table->date('Dt_ven');
            $table->string('CTPS', 30);
            $table->string('Ser', 15);
            $table->date('Dt_emiss_CNH');
            $table->string('RIC', 30);
            $table->string('Inst_banc', 30);
            $table->string('Banc', 30);
            $table->string('Ag', 30);
            $table->string('Nm_cont', 30);
            $table->string('Tp_cont', 30);
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
        Schema::dropIfExists('cadastros');
    }
};
