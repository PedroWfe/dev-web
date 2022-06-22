
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>FISIA - Register Employee System</title>
      <link rel="icon" href="icone.jpg">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 30px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Human Resource Management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('cadastros-index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                </svg>
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg>
                Editar
              </a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login-index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                </svg>
                Sair
              </a>
            </li>
            </ul>
      </div>
    </nav>
    <br>
    <form method="POST" action="{{ route('cadastros-update', ['id'=>$cadastros->id]) }}" class="row g-3 needs-validation" novalidate style="margin-left: 10px;margin-right: 10px;">
    @csrf
    @method('PUT')
      <legend><a name="info_gerais">Informações Gerais</a></legend>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Situação</span>
          <select name="Situ" class="form-select" id="validationCustom04" value="{{ $cadastros->Situ }}" required>
            <option disabled value="">Escolha...</option>
            <option <?=($cadastros['Situ'] == 'Ligado')?'selected':''?> value="Ligado">Ligado</option>
            <option <?=($cadastros['Situ'] == 'Desligado')?'selected':''?> value="Desligado">Desligado</option>

          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Tipo de Pagamento</span>
          <select  name ="Tp_pgto" class="form-select" id="validationCustom04" value="{{ $cadastros->Tp_pgto }}" required>
            <option disabled value="">Escolha...</option>
            <option <?=($cadastros['Tp_pgto'] == 'Mensal')?'selected':''?> value="Mensal">Mensal</option>
            <option <?=($cadastros['Tp_pgto'] == 'Semanal')?'selected':''?> value="Semanal">Semanal</option>
            <option <?=($cadastros['Tp_pgto'] == 'Diario')?'selected':''?> value="Diario">Diario</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Departamento</span>
          <select name="Depart" class="form-select" id="validationCustom04" value="{{ $cadastros->Depart }}" required>
            <option disabled value="">Escolha...</option>
            <option <?=($cadastros['Depart'] == 'Planejamento')?'selected':''?> value="Planejamento">Planejamento</option>
            <option <?=($cadastros['Depart'] == 'Inventario')?'selected':''?> value="Inventario">Inventário</option>
            <option <?=($cadastros['Depart'] == 'Financeiro')?'selected':''?> value="Financeiro">Financeiro</option>
            <option <?=($cadastros['Depart'] == 'Recursos Humanos')?'selected':''?> value="Recursos Humanos">Recursos Humanos</option>
            <option <?=($cadastros['Depart'] == 'Transporte')?'selected':''?> value="Transporte">Transporte</option>
            <option <?=($cadastros['Depart'] == 'TI')?'selected':''?> value="TI">TI</option>
            <option <?=($cadastros['Depart'] == 'Projetos')?'selected':''?> value="Projetos">Projetos</option>
          </select>
        </div>
      </div>
        <div class="col-md-4">
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">Cargo</span>
            <select name="Carg" class="form-select" id="validationCustom04" value="{{ $cadastros->Carg }}" required>
              <option <?=($cadastros['Carg'] == 'Gerente')?'selected':''?> value="Gerente">Gerente</option>
              <option <?=($cadastros['Carg'] == 'Supervisor')?'selected':''?> value="Supervisor">Supervisor</option>
              <option <?=($cadastros['Carg'] == 'Coordenador')?'selected':''?> value="Coordenador">Coordenador</option>
              <option <?=($cadastros['Carg'] == 'Especialista')?'selected':''?> value="Especialista">Especialista</option>
              <option <?=($cadastros['Carg'] == 'Análista Sr')?'selected':''?> value="Análista Sr">Análista Sr</option>
              <option <?=($cadastros['Carg'] == 'Análista Pl')?'selected':''?> value="Análista Pl">Análista Pl</option>
              <option <?=($cadastros['Carg'] == 'Análista Jr')?'selected':''?> value="Análista Jr">Análista Jr</option>
              <option <?=($cadastros['Carg'] == 'Assistente')?'selected':''?> value="Assistente">Assistente</option>
              <option <?=($cadastros['Carg'] == 'Auxiliar')?'selected':''?> value="Auxiliar">Auxiliar</option>
              <option <?=($cadastros['Carg'] == 'Estagiario')?'selected':''?> value="Estagiario">Estagiario</option>
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">Jornanda Semanal</span>
            <input value="{{ $cadastros->Jor_sema }}" name="Jor_sema" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;" value="<?=$cadastros['Jor_sema']?>">
          </div>
        </div>
        <div class="col-md-4">
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">% Adiantamento</span>
            <input value="{{ $cadastros->pp_adiant }}" name = "pp_adiant" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
          </div>
        </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Sálario</span>
          <input value="{{ $cadastros->Sal }}" name="Sal" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;" placeholder="R$">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Data Admissão</span>
          <input value="{{ $cadastros->Dt_Adm }}" name="Dt_Adm" type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Tipo de Admissão</span>
          <select value="{{ $cadastros->Tp_Adm }}" name="Tp_Adm" class="form-select" id="validationCustom04" required>
            <option  disabled value="">Escolha...</option>  
            <option <?=($cadastros['Tp_Adm'] == 'Admissao')?'selected':''?> value="Admissao">1 - Admissão</option>
            <option <?=($cadastros['Tp_Adm'] == 'Transferência de Empresa do mesmo grupo econômico')?'selected':''?> value="Transferência de Empresa do mesmo grupo econômico">2 - Transferência de empresa do mesmo grupo econômico</option>
            <option <?=($cadastros['Tp_Adm'] == 'Admissão por sucessão, incorporação ou fusão')?'selected':''?> value="Admissão por sucessão, incorporação ou fusão">3 - Admissão por sucessão, incorporação ou fusão</option>
            <option <?=($cadastros['Tp_Adm'] == 'Trabalhador cedido')?'selected':''?> value="Trabalhador cedido">4 - Trabalhador cedido</option>
            <option <?=($cadastros['Tp_Adm'] == 'Temporario')?'selected':''?> value="Temporario">5 - Temporario</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Descrição da Função</span>
          <input value="{{ $cadastros->Descri_fun }}" name="Descri_fun" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required  style="width: 5px;" >
          </input>
        </div>
      </div>
      <legend><a name="info_pess">Informações Pessoais</a></legend>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Nome Completo</span>
          <input value="{{ $cadastros->Nm_comple }}" name="Nm_comple" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Data de Nascimento</span>
          <input value="{{ $cadastros->Dt_nasc }}" name="Dt_nasc" type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Sexo</span>
          <select value="{{ $cadastros->sex }}" name="sex" class="form-select" id="validationCustom04" required>
            <option disabled value="">Escolha...</option>
            <option <?=($cadastros['sex'] == 'Masculino')?'selected':''?> value="Masculino">Masculino</option>
            <option <?=($cadastros['sex'] == 'Feminino')?'selected':''?> value="Feminino">Feminino</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Deficiente</span>
          <select value="{{ $cadastros->Defi }}" name="Defi" class="form-select" id="validationCustom04" required>
            <option disabled value="">Escolha...</option>
            <option <?=($cadastros['Defi'] == 'Nao')?'selected':''?> value="Nao">0 - Não</option>            
            <option <?=($cadastros['Defi'] == 'Fisica')?'selected':''?> value="Fisica">1 - Física</option>            
            <option <?=($cadastros['Defi'] == 'Auditiva')?'selected':''?> value="Auditiva">2 - Auditiva</option>            
            <option <?=($cadastros['Defi'] == 'Visual')?'selected':''?> value="Visual">3 - Visual</option>            
            <option <?=($cadastros['Defi'] == 'Mental')?'selected':''?> value="Mental">4 - Mental</option>
            <option <?=($cadastros['Defi'] == 'Multipla')?'selected':''?> value="Multipla">5 - Multipla</option>
            <option <?=($cadastros['Defi'] == 'Reabilitado')?'selected':''?> value="Reabilitado">6 - Reabilitado</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Estado Civil</span>
            <select value="{{ $cadastros->Est_civi }}" name="Est_civi" class="form-select" id="validationCustom04" required>
              <option disabled value="">Escolha...</option>
              <option <?=($cadastros['Est_civi'] == 'Casado')?'selected':''?> value="Casado">1 - Casado</option>
              <option <?=($cadastros['Est_civi'] == 'Solteiro')?'selected':''?> value="Solteiro">2 - Solteiro</option>
              <option <?=($cadastros['Est_civi'] == 'Divorciado')?'selected':''?> value="Divorciado">3 - Divorciado</option>
              <option <?=($cadastros['Est_civi'] == 'Viúvo')?'selected':''?> value="Viúvo">4 - Viúvo</option>
              <option <?=($cadastros['Est_civi'] == 'União Estável')?'selected':''?> value="Solteiro">5 - União Estável</option>
              <option <?=($cadastros['Est_civi'] == 'Outros')?'selected':''?> value="Solteiro">6 - Outros</option>
            </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend"> Grau de Instrução</span>
          <select value="{{ $cadastros->Gr_instru }}" name="Gr_instru" class="form-select" id="validationCustom04" required>
          <option  disabled value="">Escolha...</option>
            <option <?=($cadastros['Gr_instru'] == 'Até a 4º Série Incompleta')?'selected':''?> value="Até a 4º Série Incompleta">1 - Até a 4º Série Incompleta</option>
            <option <?=($cadastros['Gr_instru'] == '4º Série Completa')?'selected':''?> value="4º Série Completa">2- 4º Série Completa</option>
            <option <?=($cadastros['Gr_instru'] == 'Da 5º a 8º Série Incompleta')?'selected':''?> value="Da 5º a 8º Série Incompleta">3 - Da 5º a 8º Série Incompleta</option>
            <option <?=($cadastros['Gr_instru'] == 'Fundamental Completo')?'selected':''?> value="Fundamental Completo">4 - Fundamental Completo</option>
            <option <?=($cadastros['Gr_instru'] == '1º Grau Incompleto')?'selected':''?> value="1º Grau Incompleto">5 - 1º Grau Incompleto</option>
            <option <?=($cadastros['Gr_instru'] == '1º Grau Completo')?'selected':''?> value="1º Grau Completo">6 - 1º Grau Completo</option>
            <option <?=($cadastros['Gr_instru'] == '2º Grau Incompleto')?'selected':''?> value="2º Grau Incompleto">7 - 2º Grau Incompleto</option>
            <option <?=($cadastros['Gr_instru'] == '2º Grau Completo')?'selected':''?> value="2º Grau Completo">8 - 2º Grau Completo</option>
            <option <?=($cadastros['Gr_instru'] == '3º Grau Incompleto')?'selected':''?> value="3º Grau Incompleto">9 - 3º Grau Incompleto</option>
            <option <?=($cadastros['Gr_instru'] == '3º Grau Completo')?'selected':''?> value="3º Grau Completo">10 - 3º Grau Completo</option>
            <option <?=($cadastros['Gr_instru'] == 'Superior Incompleto')?'selected':''?> value="Superior Incompleto">11 - Superior Incompleto</option>
            <option <?=($cadastros['Gr_instru'] == 'Superior Completo')?'selected':''?> value="Superior Completo">12 - Superior Completo</option>
            <option <?=($cadastros['Gr_instru'] == 'Pós Graduação')?'selected':''?> value="Pós Graduação">13 - Pós Graduação</option>
            <option <?=($cadastros['Gr_instru'] == 'Mestrado')?'selected':''?> value="Mestrado">14 - Mestrado</option>
            <option <?=($cadastros['Gr_instru'] == 'Doutorado')?'selected':''?> value="Doutorado">15 - Doutorado</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Nome do Pai</span>
          <input value="{{ $cadastros->Nm_pai }}" name="Nm_pai" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Nome da Mãe</span>
          <input value="{{ $cadastros->Nm_mae }}" name="Nm_mae" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <legend><a name ="End">Endereço</a></legend>
      <div>
        <div class="col-md-4">
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">CEP</span>
            <input value="{{ $cadastros->CEP }}" type="text" class="form-control" name="CEP" id="cep" value="" size="10" aria-describedby="inputGroupPrepend" required style="width: 5px;" onblur="pesquisacep(this.value);">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Tipo</span>
          <select value="{{ $cadastros->tp }}" name="tp" class="form-select" id="validationCustom04" required>
            <option disabled value="">Escolha...</option>
            <option <?=($cadastros['tp'] == 'Avenida')?'selected':''?> value="Avenida">Avenida</option>
            <option <?=($cadastros['tp'] == 'Rua')?'selected':''?> value="Rua">Rua</option>
            <option <?=($cadastros['tp'] == 'Rodovia')?'selected':''?> value="Rodovia">Rodovia</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Rua</span>
          <input value="{{ $cadastros->Rua }}" name="Rua" type="text" value="" size="60" id="rua" class="form-control" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
         <span class="input-group-text" id="inputGroupPrepend">Número</span>
          <input value="{{ $cadastros->Nm }}" name="Nm" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Complemento</span>
          <input value="{{ $cadastros->Comple }}" name="Comple" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Bairro</span>
          <input value="{{ $cadastros->Bairr }}" name="Bairr" type="text" value="" size="40" id="bairro" class="form-control" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Cidade</span>
          <input value="{{ $cadastros->Cid }}" name="Cid" type="text" value="" size="40" id="cidade" class="form-control" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Estado</span>
          <input value="{{ $cadastros->Uf }}"  name="Uf" type="text" value="" size="2" id="uf" class="form-control" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">IBGE:</span>
          <input value="{{ $cadastros->IBGE }}" name="IBGE" type="text" value="" size="8" id="ibge" class="form-control" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Telefone Fixo</span>
          <input value="{{ $cadastros->Tel_Fix }}" name="Tel_Fix" type="tel" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Celular</span>
          <input value="{{ $cadastros->Cel }}" name="Cel" type="tel" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Email</span>
          <input value="{{ $cadastros->Email }}" name="Email" type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <legend><a name="Doc">Documentação</a></legend>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">CPF</span>
          <input value="{{ $cadastros->CPF }}" name="CPF" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">RG</span>
          <input value="{{ $cadastros->RG }}" name="RG" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Orgão de Emissão</span>
          <input value="{{ $cadastros->Org_Emiss }}" name="Org_Emiss" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">PIS</span>
          <input value="{{ $cadastros->PIS }}" name="PIS" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Titulo  de Eleitor</span>
          <input value="{{ $cadastros->Tit_Ele }}" name="Tit_Ele" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Zona</span>
          <input value="{{ $cadastros->Zona }}" name="Zona" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Seção</span>
          <input value="{{ $cadastros->Sec }}" name="Sec" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">C. Serv Militar</span>
        <input value="{{ $cadastros->Serv_milit }}" name="Serv_milit" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">CNH</span>
          <input value="{{ $cadastros->CNH }}" name="CNH" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Categoria</span>
          <input value="{{ $cadastros->Cat }}" name="Cat" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Data de Emissão</span>
          <input value="{{ $cadastros->Dt_emiss }}" name="Dt_emiss" type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Data de Vencimento</span>
          <input value="{{ $cadastros->Dt_ven }}" name="Dt_ven" type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">CTPS</span>
          <input value="{{ $cadastros->CTPS }}" name="CTPS" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Série</span>
          <input value="{{ $cadastros->Ser }}" name="Ser" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Data de Emissão</span>
          <input value="{{ $cadastros->Dt_emiss_CNH }}" name="Dt_emiss_CNH" type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">RIC</span>
          <input value="{{ $cadastros->RIC }}" name="RIC" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Instituição Bancaria</span>
          <select value="{{ $cadastros->Inst_banc }}" name="Inst_banc" class="form-select" id="validationCustom04" required>
            <option  disabled value="">Escolha...</option>
            <option <?=($cadastros['Inst_banc'] == 'Itau Unibanco Banco Multiplo S.A')?'selected':''?> value="Itau Unibanco Banco Multiplo S.A.">Itaú Unibanco Banco Múltiplo S.A.</option>
            <option <?=($cadastros['Inst_banc'] == 'Bradesco BBI S.A')?'selected':''?> value="Bradesco BBI S.A">Bradesco BBI S.A</option>
            <option <?=($cadastros['Inst_banc'] == 'Santader S.A')?'selected':''?> value="Santader S.A">Santander S.A</option>
            <option <?=($cadastros['Inst_banc'] == 'Banco do Brasil S.A')?'selected':''?> value="Banco do Brasil S.A">Banco do Brasil S.A</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Banco</span>
          <input value="{{ $cadastros->Banc }}" name="Banc" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Ag</span>
          <input value="{{ $cadastros->Ag }}" name="Ag" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Número da conta</span>
          <input value="{{ $cadastros->Nm_cont }}" name="Nm_cont" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Tipo de conta</span>
          <select value="{{ $cadastros->Tp_cont }}" name="Tp_cont" class="form-select" id="validationCustom04" required>
            <option disabled value="">Escolha...</option>
            <option <?=($cadastros['Tp_cont'] == 'Conta Corrente')?'selected':''?> value="Conta Corrente">Conta-Corrente</option>
            <option <?=($cadastros['Tp_cont'] == 'Conta Poupanca')?'selected':''?> value="Conta Poupanca">Conta-Poupança</option>
          </select>
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary btn-dark" type="submit" style="margin-bottom: 20px; margin-top: 20px;">Atualizar</button>
      </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>