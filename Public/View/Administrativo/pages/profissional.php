    <div class="page">
        <div class="page-content">
            <div class="row ms-4">
                <div class="col-sm-10">
                    <h1>Profissionais</h1>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-success btn-lg mt-2" id="novo">+</button>
                </div>
            </div>

            <hr>
            <!-- Modal de Cadastro -->
            <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="modalCadastroLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCadastroLabel">Cadastro de Seviços</h5>
                        </div>
                        <div class="modal-body">
                            <!-- Campos de entrada de dados -->
                            <div class="row">
                              <div class="col-sm-6">
                                <label for="recipient-name" class="col-form-label">Nome do profissional:</label>
                                <input type="text" class="form-control" id="nomeProfissional">
                              </div>
                              <div class="col-sm-6">
                                <label for="recipient-name" class="col-form-label">Cpf do profissional:</label>
                                <input type="text" class="form-control" id="cpfProfissional">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-4">
                                <label for="recipient-name" class="col-form-label">Area de Atuação:</label>
                                <input type="text" class="form-control" id="areaAtuacao">
                              </div>
                              <div class="col-sm-4">
                                <label for="recipient-name" class="col-form-label">Formação:</label>
                                <input type="text" class="form-control" id="formacao">
                              </div>
                              <div class="col-sm-4">
                                <label for="telefone" class="col-form-label">Telefone:</label>
                                <input type="text" name="telefone" class="form-control" id="telefone">
                              </div>
                            </div>
                            <div class="row">  
                              <div class="col-sm-6">
                                <label for="recipient-name" class="col-form-label">Email:</label>
                                <input type="text" class="form-control" id="email">
                              </div>
                              <div class="col-sm-6">
                                <label for="recipient-name" class="col-form-label">Endereço:</label>
                                <input type="text" class="form-control" id="endereco">
                              </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4 row mr-4">
                                   <div class="col-8">
                                        <label for="">CEP</label>
                                        <input type="text" class="form-control" id="input-cep" maxlength="8" >  
                                   </div>       
                                   <div class="col-2 mt-4">
                                    <button type="button" class="btn btn-warning" id="btn-via-cep">busca</button>
                                   </div>                           
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Rua</label>
                                    <input type="text" name="rua" id="input-rua" class="form-control" disabled>
                                </div>
                                
                                <div class="col-sm-4">
                                    <label for="">Numero</label>
                                    <input type="text" name="numero" id="input-numero" class="form-control" disabled>
                                </div>
                                
                                <div class="col-sm-4">
                                    <label for="">Complemento</label>
                                    <input type="text" name="complemento" id="input-complemento" class="form-control" disabled>
                                </div>
                                
                                <div class="col-sm-4">
                                    <label for="">Cidade</label>
                                    <input type="text" name="cidade" id="input-cidade" class="form-control" disabled>
                                </div>
                                
                                <div class="col-sm-4">
                                    <label for="">Estado</label>
                                    <input type="text" name="estado" id="input-estado" class="form-control" disabled>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary" id="btnSalvarProfissional">Adicionar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabela -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Profissional</th>
                        <th>Pessoa física</th>
                        <th>area de atuação</th>
                        <th>Formação</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>Email</th>
                        <th>ações</th>
                    </tr>
                </thead>
                <tbody id="tabelaProfissionais">
                    <!-- Linhas da tabela serão adicionadas aqui -->
                </tbody>
            </table>

            <script>
                $('#novo').click(() => $('#modalCadastro').modal('show'));
                $(document).ready(function () {
                    // Função para adicionar uma nova linha à tabela FAlTA
                    function adicionarLinha(valor1, valor2, valor3, valor4, valor5, valor6, valor7) {
                        var novaLinha = "<tr><td>" + valor1 + "</td><td>" + valor2 + "</td><td>" + valor3 + "</td><td>" + valor4 + "</td><td>" + valor5 + "</td><td>" + valor6 + "</td><td>" + valor7 + "</td><td>" + 
                            "<button class='btn btn-info btn-editar'>Editar</button>" +
                            "<button class='btn btn-danger btn-excluir'>Excluir</button></td></tr>";

                        $("#tabelaProfissionais").append(novaLinha);
                    }

                    // Quando o botão "Salvar" no modal for clicado FALTA
                    $("#btnSalvarProfissional").click(function () {
                        var nome = $("#nomeProfissional").val();
                        var cpf = $("#cpfProfissional").val();
                        var areaAtuacao = $("#areaAtuacao").val();
                        var formacao = $("#formacao").val();
                        var telefone = $("#telefone").val();
                        var endereco = $("#endereco").val();
                        var email = $("#email").val();
                        adicionarLinha(nome, cpf, areaAtuacao, formacao, telefone, endereco, email);


                        $("#modalCadastro").modal("hide");
                    });

                    // Função para editar uma linha
                    $(document).on("click", ".btn-editar", function () {
                        var linha = $(this).closest("tr");
                        var nome = linha.find("td:eq(0)").text();
                        var cpf = linha.find("td:eq(1)").text();
                        var areaAtuacao = linha.find("td:eq(2)").text();
                        var formacao = linha.find("td:eq(3)").text();
                        var telefone = linha.find("td:eq(4)").text();
                        var endereco = linha.find("td:eq(5)").text();
                        var email = linha.find("td:eq(6)").text();

                        // Preencher o modal de edição com os dados da linha selecionada FALTA AQUI
                        $("#nomeProfissional").val(nome);
                        $("#cpfProfissional").val(cpf);
                        $("#areaAtuacao").val(areaAtuacao);
                        $("#formacao").val(formacao);
                        $("telefone").val(telefone);
                        $("endereco").val(endereco);
                        $("email").val(email);

                        // Exibir o modal de edição
                        $("#modalCadastro").modal("show");

                        // Remover a linha original da tabela
                        linha.remove();
                    });

                    // Função para excluir uma linha
                    $(document).on("click", ".btn-excluir", function () {
                        $(this).closest("tr").remove();
                    });
                });

                $('#btn-via-cep').click(function() {
                    let cep = $('#input-cep').val();
                    if (cep !== '') {
                        $.ajax({
                            url: "http://viacep.com.br/ws/"+cep+"/json/",
                            dataType: "JSON",
                            method: 'GET',
                            success: function(response) {
                                $('#input-rua').val(response.logradouro);
                                $('#input-rua').attr('disabled', false);
                                $('#input-cidade').val(response.localidade);
                                $('#input-estado').val(response.uf);
                            }
                        });
                    }   
                });
            </script>
        </div>
    </div>