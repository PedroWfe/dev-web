<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;


class CadastrosController extends Controller
{
    public function index(){
        $cadastros = Cadastro::all();
        return view('cadastros.index', ['cadastros'=>$cadastros]);
    }
    public function create(){
        return view('cadastros.create');
    }
    public function store(Request $request){
        Cadastro::create($request->all());
        return redirect()->route('cadastros-index');
    }
    public function edit($id){
        $cadastros = Cadastro::where('id', $id)->first();
        if(!empty($cadastros)){
            return view('cadastros.edit', ['cadastros'=>$cadastros]);
        }
        else{
            return redirect()->route('cadastros-index');
        }
    }
    public function update(Request $request, $id){
        
        $data = [
            'Situ' => $request->Situ,
            'Tp_pgto' => $request->Tp_pgto,
            'Depart' => $request->Depart,
            'Carg' => $request->Carg,
            'Jor_sema' => $request->Jor_sema,
            'pp_adiant' => $request->pp_adiant,
            'Sal' => $request->Sal,
            'Dt_Adm' => $request->Dt_Adm,
            'Tp_Adm' => $request->Tp_Adm,
            'Descri_fun' => $request->Descri_fun,
            'Nm_comple' => $request->Nm_comple,
            'Dt_nasc' => $request->Dt_nasc,
            'sex' => $request->sex,
            'Defi' => $request->Defi,
            'Est_civi' => $request->Est_civi,
            'Gr_instru' => $request->Gr_instru,
            'Nm_pai' => $request->Nm_pai,
            'Nm_mae' => $request->Nm_mae,
            'CEP' => $request->CEP,
            'tp' => $request->tp,
            'Rua' => $request->Rua,
            'Nm' => $request->Nm,
            'Comple' => $request->Comple,
            'Bairr' => $request->Bairr,
            'Cid' => $request->Cid,
            'Uf' => $request->Uf,
            'IBGE' => $request->IBGE,
            'Tel_Fix' => $request->Tel_Fix,
            'Cel' => $request->Cel,
            'Email' => $request->Email,
            'CPF' => $request->CPF,
            'RG' => $request->RG,
            'Org_Emiss' => $request->Org_Emiss,
            'PIS' => $request->PIS,
            'Tit_Ele' => $request->Tit_Ele,
            'Zona' => $request->Zona,
            'Sec' => $request->Sec,
            'Serv_milit' => $request->Serv_milit,
            'CNH' => $request->CNH,
            'Cat' => $request->Cat,
            'Dt_emiss' => $request->Dt_emiss,
            'Dt_ven' => $request->Dt_ven,
            'CTPS' => $request->CTPS,
            'Ser' => $request->Ser,
            'Dt_emiss_CNH' => $request->Dt_emiss_CNH,
            'RIC' => $request->RIC,
            'Inst_banc' => $request->RIC,
            'Banc' => $request->Banc,
            'Ag' => $request->Ag,
            'Nm_cont' => $request->Nm_cont,
            'Tp_cont' => $request->Tp_cont,
        ];
        Cadastro::where('id', $id)->update($data);
        return redirect()->route('cadastros-index');
    }
    public function destroy($id){
        Cadastro::where('id', $id)->delete();
        return redirect()->route('cadastros-index');
    }
    public function show($id){
        $cadastros = Cadastro::where('id', $id)->first();
        if(!empty($cadastros)){
            return view('cadastros.show', ['cadastros'=>$cadastros]);
        }
        else{
            return redirect()->route('cadastros-index');
        }
    }
}
