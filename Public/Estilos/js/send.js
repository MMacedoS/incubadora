

function enviarRequisicao(dados, URL_DA_API) {
    
    exibirSpinner();
    
    $.ajax({
      url: URL_DA_API,
      method: 'POST',
      data: dados,
      success: function(response) {
        console.log(response);
        exibirMensagemSucesso('Requisição enviada com sucesso!');
      },
      error: function(error) {
        console.log(error);
        exibirMensagemAviso('Ocorreu um erro na requisição!');
      }
    });
  }
  
  function exibirSpinner() {
    $('#spinner').removeClass('d-none');
  }
  
  function exibirMensagemSucesso(mensagem) {
    var successMessage = '<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                         mensagem +
                         '  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>' +
                         '</div>';
    $('#mensagem').html(successMessage);
    
    esconderSpinner();
  }
  
  function exibirMensagemAviso(mensagem) {
    var warningMessage = '<div class="alert alert-warning alert-dismissible fade show" role="alert">' +
                         mensagem +
                         '  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>' +
                         '</div>';
    $('#mensagem').html(warningMessage);
    
    esconderSpinner();
  }
  
  function esconderSpinner() {
    $('#spinner').addClass('d-none');
  }