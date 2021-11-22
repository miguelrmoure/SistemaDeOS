<?php
include_once dirname(__FILE__) . '/partials/head.php';
?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php
    include_once dirname(__FILE__) . '/partials/header.php';
    ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Funcionarios
        </h1>
        <ol class="breadcrumb">
          <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
          <li class="active">Funcionarios</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Lista</h3>
            <a href="#" class="btn btn-xs pull-right btn-success" data-toggle="modal" data-target="#modal-create"><i class="fa fa-plus"></i> Novo</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>CPF - CNPJ</th>
                  <th>Nome</th>
                  <th>Telfone</th>
                  <th>E-mail</th>
                  <th>Setor</th>
                  <th style="min-width: 134px;">Ações</th>
                </tr>
              </thead>
              <tbody id="CorpoTabela">

              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <div class="modal fade" id="modal-create">
      <div class="modal-dialog">
        <div class="modal-content" style="border-top: 3px solid #00a65a;">
          <form>
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title">Novo Funcionario</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="inputNameCreate">CPF - CNPJ</label>
                <input type="text" class="form-control" id="NCPF" name="NCPF">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Nome</label>
                <input type="text" class="form-control" id="NNome" name="NNome">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Telfone</label>
                <input type="text" class="form-control" id="NTelfone" name="NTelfone">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">E-mail</label>
                <input type="text" class="form-control" id="NEmail" name="NEmail">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Setor</label>
                <select name="cars" class="form-control" id="NSetor" name="NSetor">

                </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" id="FecharModal" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
              <button type="button" id="SalvarSetor" class="btn btn-success">Salvar</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="modal-update">
      <div class="modal-dialog">
        <div class="modal-content" style="border-top: 3px solid #00c0ef;">
          <form>
            <input type="hidden" name="id">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title">Editar Funcionario</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="inputNameCreate">CPF - CNPJ</label>
                <input type="text" class="form-control" id="ECPF" name="NCPF">
                <input type="text" style="display: none;" class="form-control" id="EIdPessoa" name="EIdPessoa">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Nome</label>
                <input type="text" class="form-control" id="ENome" name="NNome">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Telfone</label>
                <input type="text" class="form-control" id="ETelfone" name="NTelfone">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">E-mail</label>
                <input type="text" class="form-control" id="EEmail" name="NEmail">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Setor</label>
                <select name="cars" class="form-control" id="ESetor" name="NSetor">

                </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" id="FecharModalE" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
              <button type="button" id="EditarSetor" class="btn btn-info">Editar</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="modal-delete">
      <div class="modal-dialog">
        <div class="modal-content" style="border-top: 3px solid #ac2925;">
          <form>
            <input type="hidden" name="id">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title">Tem Certeza que deseja deletar os Seguintes registro?</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="inputNameCreate">CPF - CNPJ</label>
                <input type="text" class="form-control" id="DCPF" name="DCPF" readonly="readonly">
                <input type="text" style="display: none;" class="form-control" id="DIdPessoa" name="DIdPessoa">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Nome</label>
                <input type="text" class="form-control" id="DNome" name="DNome" readonly="readonly">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Telfone</label>
                <input type="text" class="form-control" id="DTelfone" name="DTelfone" readonly="readonly">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">E-mail</label>
                <input type="text" class="form-control" id="DEmail" name="DEmail" readonly="readonly">
              </div>
              <div class="form-group">
                <label for="inputNameCreate">Setor</label>
                <select name="cars" class="form-control" id="DSetor" name="DSetor" disabled="disabled">

                </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" id="FecharModalD" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
              <button type="button" id="DeletarSetor" class="btn btn-danger">Deletar</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>


    <?php
    include_once dirname(__FILE__) . '/partials/footer.php';
    ?>

  </div>

  <?php
  include_once dirname(__FILE__) . '/partials/script.php';
  ?>

  <script>
    document.getElementById("MenuCadastro").click();
    $("#menu06").addClass("active");
  </script>

  <script>
    function GerarTabela() {


      $('#CorpoTabela').empty(); //Limpando a tabela
      $.ajax({
        method: "GET",
        url: "/controller/FuncionarioController.php",
        data: {
          tipoGet: 'SelectTodos'
        }
      }).done(function(resposta) {
        console.log(resposta)
        resposta = JSON.parse(resposta);
        for (var i = 0; resposta.length > i; i++) {
          //Adicionando registros retornados na tabela
          $('#CorpoTabela').append('<tr id="tr' + resposta[i]["idpessoa"] + '">' +
            '<td scope="col" style="display: none;">' + resposta[i]["idpessoa"] + '</td>' +
            '<td scope="col">' + resposta[i]["cnpj_cpf"] + '</td>' +
            '<td scope="col">' + resposta[i]["nome"] + '</td>' +
            '<td scope="col">' + resposta[i]["fone"] + '</td>' +
            '<td scope="col">' + resposta[i]["email"] + '</td>' +
            '<td scope="col" value="' + resposta[i]["idsetor"] + '">' + resposta[i]["Setor"] + '</td>' +
            '<td scope="col">' +
            '<button type="button" class="btn btn-xs btn-info abrirModalEditar" data-toggle="modal" data-target="#modal-update"><i class="fa fa-pencil"></i> Editar</button>&nbsp;' +
            '<button type="button" class="btn btn-xs btn-danger btn-delete abrirModalDelete" data-toggle="modal" data-target="#modal-delete"><i class="fa fa-trash"></i> Excluir</button>' +
            '</td></tr>');
        }
      }).fail(function() {
        console.log('falha ao Carregar Tabela');
        mostraDialogo('falha ao Carregar Tabela', 'alert-danger');
      });
    }

    function MudaLinha(cod) {
      $.ajax({
        method: "GET",
        url: "/controller/FuncionarioController.php",
        data: {
          tipoGet: 'Select',
          cod: cod
        }
      }).done(function(resposta) {
        resposta = JSON.parse(resposta);
        $('#tr' + cod).html('' +
        '<td scope="col" style="display: none;">' + resposta[0]["idpessoa"] + '</td>' +
            '<td scope="col">' + resposta[0]["cnpj_cpf"] + '</td>' +
            '<td scope="col">' + resposta[0]["nome"] + '</td>' +
            '<td scope="col">' + resposta[0]["fone"] + '</td>' +
            '<td scope="col">' + resposta[0]["email"] + '</td>' +
            '<td scope="col" value="' + resposta[0]["idsetor"] + '">' + resposta[0]["Setor"] + '</td>' +
            '<td scope="col">' +
            '<button type="button" class="btn btn-xs btn-info abrirModalEditar" data-toggle="modal" data-target="#modal-update"><i class="fa fa-pencil"></i> Editar</button>&nbsp;' +
            '<button type="button" class="btn btn-xs btn-danger btn-delete abrirModalDelete" data-toggle="modal" data-target="#modal-delete"><i class="fa fa-trash"></i> Excluir</button>' +
            '</td></tr>');
      }).fail(function() {
        console.log('falha ao Procurar');
      });
    }

    GerarTabela()

    $('#SalvarSetor').click(function() {

      var NCPF = $("#NCPF").val();
      var NNome = $("#NNome").val();
      var NTelfone = $("#NTelfone").val();
      var NEmail = $("#NEmail").val();
      var NSetor = $("#NSetor").val();

      $.ajax({
        method: "POST",
        url: "/controller/FuncionarioController.php",
        data: {
          cpf: NCPF,
          nome: NNome,
          telfone: NTelfone,
          email: NEmail,
          setor: NSetor
        }
      }).done(function(resposta) {
        $("#FecharModal").trigger('click');
        GerarTabela();
        mostraDialogo(resposta, 'alert-success');
      }).fail(function() {
        $("#FecharModal").trigger('click');
        mostraDialogo('falha ao Salvar', 'alert-danger');
      });
    });

    $('#EditarSetor').click(function() {

      var EIdPessoa = $("#EIdPessoa").val();
      var ECPF = $("#ECPF").val();
      var ENome = $("#ENome").val();
      var ETelfone = $("#ETelfone").val();
      var EEmail = $("#EEmail").val();
      var ESetor = $("#ESetor").val();

      $.ajax({
        method: "PUT",
        url: "/controller/FuncionarioController.php",
        data: {
          IdPessoa: EIdPessoa,
          CPF: ECPF,
          Nome: ENome,
          Telfone: ETelfone,
          Email: EEmail,
          Setor: ESetor
        }
      }).done(function(resposta) {
        $("#FecharModalE").trigger('click');
        MudaLinha(EIdPessoa);
        mostraDialogo(resposta, 'alert-success');
      }).fail(function() {
        $("#FecharModalE").trigger('click');
        mostraDialogo('falha ao Editar', 'alert-danger');
      });
    });

    $('#DeletarSetor').click(function() {

      var Dcod = $("#DIdPessoa").val();

      $.ajax({
        method: "DELETE",
        url: "/controller/FuncionarioController.php",
        data: {
          cod: Dcod
        }
      }).done(function(resposta) {
        $("#FecharModalD").trigger('click');
        GerarTabela();
        mostraDialogo(resposta, 'alert-success');
      }).fail(function() {
        $("#FecharModalE").trigger('click');
        mostraDialogo('falha ao Deletar', 'alert-danger');
      });
    });



    $(function() {
      $(document).on('click', '.abrirModalEditar', function(e) {
        e.preventDefault;
        var tdobj = $(this).closest('tr').find('td');
        var EIdPessoa = tdobj[0].innerHTML;
        var ECPF = tdobj[1].innerHTML;
        var ENome = tdobj[2].innerHTML;
        var ETelfone = tdobj[3].innerHTML;
        var EEmail = tdobj[4].innerHTML;
        var ESetor = tdobj[5].getAttribute('value');

        console.log(tdobj);

         $('#EIdPessoa').val(EIdPessoa);
         $('#ECPF').val(ECPF);
         $('#ENome').val(ENome);
         $('#ETelfone').val(ETelfone);
         $('#EEmail').val(EEmail);
         $('#ESetor').val(ESetor);

      });

      $(document).on('click', '.abrirModalDelete', function(e) {
        e.preventDefault;
        var tdobj = $(this).closest('tr').find('td');
        var EIdPessoa = tdobj[0].innerHTML;
        var ECPF = tdobj[1].innerHTML;
        var ENome = tdobj[2].innerHTML;
        var ETelfone = tdobj[3].innerHTML;
        var EEmail = tdobj[4].innerHTML;
        var ESetor = tdobj[5].getAttribute('value');

        console.log(tdobj);

         $('#DIdPessoa').val(EIdPessoa);
         $('#DCPF').val(ECPF);
         $('#DNome').val(ENome);
         $('#DTelfone').val(ETelfone);
         $('#DEmail').val(EEmail);
         $('#DSetor').val(ESetor);


      });
    });


    function mostraDialogo(mensagem, tipo) {

      // se não setar o tempo, o padrão é 4.5 segundos
      var tempo = 4500;

      // monta o css da mensagem para que fique flutuando na frente de todos elementos da página
      var cssMessage = "display: block; position: fixed; top: 0; left: 20%; right: 20%; width: auto; padding-top: 10px; z-index: 9999";
      var cssInner = "margin: 0 auto; box-shadow: 1px 1px 5px black; text-align:center";

      // monta o html da mensagem com Bootstrap
      var dialogo = "";
      dialogo += '<div id="message" style="' + cssMessage + '">';
      dialogo += '    <div class="alert ' + tipo + ' alert-dismissable" style="' + cssInner + '">';
      dialogo += '    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>';
      dialogo += mensagem;
      dialogo += '    </div>';
      dialogo += '</div>';

      // adiciona ao body a mensagem com o efeito de fade
      $("body").append(dialogo);
      $("#message").hide();
      $("#message").fadeIn(200);

      // contador de tempo para a mensagem sumir
      setTimeout(function() {
        $('#message').fadeOut(300, function() {
          $(this).remove();
        });
      }, tempo); // milliseconds

    }
  </script>

  <script>
    window.onload = function() {
      const comboNSetor = document.getElementById("NSetor");
      const comboESetor = document.getElementById("ESetor");
      const comboDSetor = document.getElementById("DSetor");
      $.ajax({
        method: "GET",
        url: "/controller/SetorController.php",
        data: {
          tipoGet: 'SelectTodos'
        }
      }).done(function(resposta) {
        console.log(resposta)
        resposta = JSON.parse(resposta);
        var opt0 = document.createElement("option");
        opt0.value = "0";
        opt0.text = "Selecione um Setor";
        comboNSetor.add(opt0, comboNSetor.options[0]);
        for (var i = 0; resposta.length > i; i++) {
          //Adicionando registros retornados na tabela
          var opt = document.createElement("option");
          opt.value = resposta[i]["idsetor"];
          opt.text = resposta[i]["nome"];
          comboNSetor.add(opt, comboNSetor.options[resposta[i]["idsetor"]]);
        }
        var opt1 = document.createElement("option");
        opt1.value = "0";
        opt1.text = "Selecione um Setor";
        comboESetor.add(opt1, comboESetor.options[0]);
        for (var i = 0; resposta.length > i; i++) {
          //Adicionando registros retornados na tabela
          var opt = document.createElement("option");
          opt.value = resposta[i]["idsetor"];
          opt.text = resposta[i]["nome"];
          comboESetor.add(opt, comboESetor.options[resposta[i]["idsetor"]]);
        }
        var opt2 = document.createElement("option");
        opt2.value = "0";
        opt2.text = "Selecione um Setor";
        comboDSetor.add(opt2, comboDSetor.options[0]);
        for (var i = 0; resposta.length > i; i++) {
          //Adicionando registros retornados na tabela
          var opt = document.createElement("option");
          opt.value = resposta[i]["idsetor"];
          opt.text = resposta[i]["nome"];
          comboDSetor.add(opt, comboDSetor.options[resposta[i]["idsetor"]]);
        }
      }).fail(function() {
        console.log('falha ao Carregar Tabela');
        mostraDialogo('falha ao Carregar Tabela', 'alert-danger');
      });

    };
  </script>

</body>

</html>