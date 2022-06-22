<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'Situ', 
        'Tp_pgto', 
        'Depart', 
        'Carg',
        'Jor_sema', 
        'pp_adiant', 
        'Sal', 
        'Dt_Adm',
        'Tp_Adm', 
        'Descri_fun', 
        'Nm_comple', 
        'Dt_nasc',
        'sex', 
        'Defi', 
        'Est_civi', 
        'Gr_instru', 
        'Nm_pai', 
        'Nm_mae', 
        'CEP', 
        'tp', 
        'Rua', 
        'Nm', 
        'Comple', 
        'Bairr', 
        'Cid', 
        'Uf', 
        'IBGE', 
        'Tel_Fix', 
        'Cel', 
        'Email', 
        'CPF', 
        'RG', 
        'Org_Emiss', 
        'PIS',
        'Tit_Ele', 
        'Zona', 
        'Sec', 
        'Serv_milit',
        'CNH', 
        'Cat', 
        'Dt_emiss',
        'Dt_ven',
        'CTPS',
        'Ser', 
        'Dt_emiss_CNH',
        'RIC',
        'Inst_banc', 
        'Banc',
        'Ag', 
        'Nm_cont',
        'Tp_cont',
    ];
}
