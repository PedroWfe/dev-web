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
                Cadastro
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
    <form method="POST" action="{{ route('cadastros-store') }}" class="row g-3 needs-validation" novalidate style="margin-left: 10px;margin-right: 10px;">
    @csrf  
    <legend><a name="info_gerais">Informações Gerais</a></legend>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Situação</span>
          <select name="Situ" class="form-select" id="validationCustom04" required >
            <option selected disabled value="">Escolha...</option>
            <option value="Ligado">Ligado</option>
            <option value="Desligado">Desligado</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Tipo de Pagamento</span>
          <select name ="Tp_pgto" class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Escolha...</option>
            <option value="Mensal">Mensal</option>
            <option value="Semanal">Semanal</option>
            <option value="Diario">Diario</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Departamento</span>
          <select name="Depart" class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Escolha...</option>
            <option value="Planejameto">Planejameto</option>
            <option value="Inventario">Inventário</option>
            <option value="Financeiro">Financeiro</option>
            <option value="Recursos Humanos">Recursos Humanos</option>
            <option value="Transporte">Transporte</option>
            <option value="TI">TI</option>
            <option value="Projetos">Projetos</option>
          </select>
        </div>
      </div>
        <div class="col-md-4">
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">Cargo</span>
            <select name="Carg" class="form-select" id="validationCustom04" required>
              <option value="Gerente">Gerente</option>
              <option value="Supervisor">Supervisor</option>
              <option value="Coordenador">Coordenador</option>
              <option value="Especialista">Especialista</option>
              <option value="Análista Sr">Análista Sr</option>
              <option value="Análista Pl">Análista Pl</option>
              <option value="Análista Jr">Análista Jr</option>
              <option value="Assistente">Assistente</option>
              <option value="Auxiliar">Auxiliar</option>
              <option value="Estagiario">Estagiario</option>
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">Jornanda Semanal</span>
            <input name="Jor_sema" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
          </div>
        </div>
        <div class="col-md-4">
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">% Adiantamento</span>
            <input name = "pp_adiant" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
          </div>
        </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Sálario</span>
          <input name="Sal" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;" placeholder="R$">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Data Admissão</span>
          <input name="Dt_Adm" type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Tipo de Admissão</span>
          <select name="Tp_Adm" class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Escolha...</option>  
            <option value="Admissao">1 - Admissão</option>
            <option value="Transferência de Empresa do mesmo grupo econômico">2 - Transferência de empresa do mesmo grupo econômico</option>
            <option value="Admissão por sucessão, incorporação ou fusão">3 - Admissão por sucessão, incorporação ou fusão</option>
            <option value="Trabalhador cedido">4 - Trabalhador cedido</option>
            <option value="Temporario">5 - Temporario</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Foto 3x4</span>
          <input name="Foto" type="file" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;" placeholder="R$">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Descrição da Função</span>
          <input name="Descri_fun" type="" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
          </input>
        </div>
      </div>
      <legend><a name="info_pess">Informações Pessoais</a></legend>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Nome Completo</span>
          <input name="Nm_comple" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Data de Nascimento</span>
          <input name="Dt_nasc" type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Sexo</span>
          <select name="sex" class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Escolha...</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Deficiente</span>
          <select name="Defi" class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Escolha...</option>
            <option value="Nao">0 - Não</option>            
            <option value="Fisica">1 - Física</option>            
            <option value="Auditiva">2 - Auditiva</option>            
            <option value="Visual">3 - Visual</option>            
            <option value="Mental">4 - Mental</option>
            <option value="Multipla">5 - Multipla</option>
            <option value="Reabilitado">6 - Reabilitado</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Estado Civil</span>
            <select name="Est_civi" class="form-select" id="validationCustom04" required>
              <option selected disabled value="">Escolha...</option>
              <option value="Casado">1 - Casado</option>
              <option value="Solteiro">2 - Solteiro</option>
              <option value="Divorciado">3 - Divorciado</option>
              <option value="Viúvo">4 - Viúvo</option>
              <option value="União Estável">5 - União Estável</option>
              <option value="Outros">6 - Outros</option>
            </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend"> Grau de Instrução</span>
          <select name="Gr_instru" class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Escolha...</option>
            <option value="Até a 4º Série Incompleta">1 - Até a 4º Série Incompleta</option>
            <option value="4º Série Completa">2- 4º Série Completa</option>
            <option value="Da 5º a 8º Série Incompleta">3 - Da 5º a 8º Série Incompleta</option>
            <option value="Fundamental Completo">4 - Fundamental Completo</option>
            <option value="1º Grau Incompleto">5 - 1º Grau Incompleto</option>
            <option value="1º Grau Completo">6 - 1º Grau Completo</option>
            <option value="2º Grau Incompleto">7 - 2º Grau Incompleto</option>
            <option value="2º Grau Completo">8 - 2º Grau Completo</option>
            <option value="3º Grau Incompleto">9 - 3º Grau Incompleto</option>
            <option value="3º Grau Completo">10 - 3º Grau Completo</option>
            <option value="Superior Incompleto">11 - Superior Incompleto</option>
            <option value="Superior Completo">12 - Superior Completo</option>
            <option value="Pós Graduação">13 - Pós Graduação</option>
            <option value="Mestrado">14 - Mestrado</option>
            <option value="Doutorado">15 - Doutorado</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Nome do Pai</span>
          <input name="Nm_pai" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Nome da Mãe</span>
          <input name="Nm_mae" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <legend><a name ="End">Endereço</a></legend>
      <div>
        <div class="col-md-4">
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">CEP</span>
            <input type="text" class="form-control" name="CEP" id="cep" value="" size="10" aria-describedby="inputGroupPrepend" required style="width: 5px;" onblur="pesquisacep(this.value);">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Tipo</span>
          <select name="tp" class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Escolha...</option>
            <option value="Avenida">Avenida</option>
            <option value="Rua">Rua</option>
            <option value="Rodovia">Rodovia</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Rua</span>
          <input name="Rua" type="text" value="" size="60" id="rua" class="form-control" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
         <span class="input-group-text" id="inputGroupPrepend">Número</span>
          <input name="Nm" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Complemento</span>
          <input name="Comple" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Bairro</span>
          <input name="Bairr" type="text" value="" size="40" id="bairro" class="form-control" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Cidade</span>
          <input name="Cid" type="text" value="" size="40" id="cidade" class="form-control" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Estado</span>
          <input name="Uf" type="text" value="" size="2" id="uf" class="form-control" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">IBGE:</span>
          <input name="IBGE" type="text" value="" size="8" id="ibge" class="form-control" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Telefone Fixo</span>
          <input name="Tel_Fix" type="tel" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Celular</span>
          <input name="Cel" type="tel" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Email</span>
          <input name="Email" type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <legend><a name="Doc">Documentação</a></legend>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">CPF</span>
          <input name="CPF" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">RG</span>
          <input name="RG" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Orgão de Emissão</span>
          <input name="Org_Emiss" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">PIS</span>
          <input name="PIS" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Titulo  de Eleitor</span>
          <input name="Tit_Ele" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Zona</span>
          <input name="Zona" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Seção</span>
          <input name="Sec" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">C. Serv Militar</span>
        <input name="Serv_milit" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">CNH</span>
          <input name="CNH" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Categoria</span>
          <input name="Cat" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Data de Emissão</span>
          <input name="Dt_emiss" type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Data de Vencimento</span>
          <input name="Dt_ven" type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">CTPS</span>
          <input name="CTPS" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Série</span>
          <input name="Ser" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Data de Emissão</span>
          <input name="Dt_emiss_CNH" type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">RIC</span>
          <input name="RIC" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Instituição Bancaria</span>
          <select name="Inst_banc" class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Escolha...</option>
            <option value="Itau Unibanco Banco Multiplo S.A.">Itaú Unibanco Banco Múltiplo S.A.</option>
            <option value="Bradesco BBI S.A">Bradesco BBI S.A</option>
            <option value="Santader S.A">Santander S.A</option>
            <option value="Banco do Brasil S.A">Banco do Brasil S.A</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Banco</span>
          <input name="Banc" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Ag</span>
          <input name="Ag" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Número da conta</span>
          <input name="Nm_cont" type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required style="width: 5px;">
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Tipo de conta</span>
          <select name="Tp_cont" class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Escolha...</option>
            <option value="Conta Corrente">Conta-Corrente</option>
            <option value="Conta Poupanca">Conta-Poupança</option>
          </select>
        </div>
      </div>
    <br><br>
    <div class="col-12">
        <button class="btn btn-primary btn-blue" type="submit" style="margin-bottom: 20px; margin-top: 20px;">Adicionar 
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
          </svg>
        </button>
      </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>